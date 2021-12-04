import pandas as pd
import numpy as np
df = pd.read_csv('dataset.csv', header=0)



df = df.assign(avg5day=[0.0]*len(df))
df = df.assign(avg10day=[0.0]*len(df))
df = df.assign(avg30day=[0.0]*len(df))

for i in range(5,len(df)):
    df.at[i,'avg5day'] = df[['Close']].iloc[[i-5,i]].mean(axis=0)
for i in range(10,len(df)):
    df.at[i,'avg10day'] = df[['Close']].iloc[[i-10,i]].mean(axis=0)
for i in range(30,len(df)):
    df.at[i,'avg30day'] = df[['Close']].iloc[[i-30,i]].mean(axis=0)

print(df)

