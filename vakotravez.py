import os
import sys
import json
import pandas as pd
from sklearn.tree import DecisionTreeClassifier

def entrenar_y_predecir_porcentajes():
    ruta_actual = os.path.dirname(os.path.abspath(__file__))
    df = pd.read_excel(os.path.join(ruta_actual, 'vak_dataset.xlsx'))
    df.columns = df.columns.str.strip()
    
    columna_target = None
    for col in df.columns:
        if 'target' in col.lower() or 'estilo' in col.lower() or 'vak' in col.lower():
            columna_target = col
            break
            
    if not columna_target:
        columna_target = df.columns[-1]

    y = df[columna_target]
    X = df.drop(columns=[columna_target, 'Personas'], errors='ignore')
    
    for col in X.columns:
        X[col] = X[col].astype(str).str.strip()
    
    X_codificado = pd.get_dummies(X)
    columnas_entrenamiento = X_codificado.columns

    tree = DecisionTreeClassifier(max_depth=64, random_state=42)
    tree.fit(X_codificado, y)

    if len(sys.argv) > 1:
        respuestas_alumno = sys.argv[1].split()

        if len(respuestas_alumno) != len(X.columns):
            respuestas_alumno = (respuestas_alumno + ['A'] * 40)[:len(X.columns)]

        df_alumno = pd.DataFrame([respuestas_alumno], columns=X.columns)
        for col in df_alumno.columns:
            df_alumno[col] = df_alumno[col].astype(str).str.strip()
            
        df_alumno_codificado = pd.get_dummies(df_alumno)
        df_alumno_codificado = df_alumno_codificado.reindex(columns=columnas_entrenamiento, fill_value=0)

        prediccion = tree.predict(df_alumno_codificado)[0]
        ganador_final = str(prediccion).strip().upper()

        if ganador_final == 'V' or 'VIS' in ganador_final:
            ganador_final = 'Visual'
        elif ganador_final == 'A' or 'AUD' in ganador_final:
            ganador_final = 'Auditivo'
        elif ganador_final in ['B', 'K', 'C'] or 'KIN' in ganador_final or 'CIN' in ganador_final:
            ganador_final = 'Kinestésico'

        print(json.dumps({"ganador": ganador_final}))
    else:
        print(json.dumps({"ganador": "No determinado"}))

if __name__ == "__main__":
    entrenar_y_predecir_porcentajes()