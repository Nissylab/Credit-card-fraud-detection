import random
import pandas
import time
from decisionTree import trainTestSplit, buildDecisionTree, decisionTreePredictions, calculateAccuracy


from flask import Flask
app = Flask(__name__)






dataFrame = pandas.read_csv("account.csv")

dataFrame = dataFrame.drop("Status", axis = 1)
dataFrame = dataFrame.drop("Date", axis = 1)


dataFrame = dataFrame[dataFrame.columns.tolist()[1: ] + dataFrame.columns.tolist()[0: 1]]
dataFrameTrain, dataFrameTest = trainTestSplit(dataFrame, testSize = 0.25)

print("Decision Tree - ")

i = 1
accuracyTrain = 0
while accuracyTrain < 20:
    startTime = time.time()
    decisionTree = buildDecisionTree(dataFrameTrain, maxDepth = i)
    buildingTime = time.time() - startTime
    decisionTreeTestResults = decisionTreePredictions(dataFrameTest, decisionTree)
    accuracyTest = calculateAccuracy(decisionTreeTestResults, dataFrameTest.iloc[:, -1]) * 100
    decisionTreeTrainResults = decisionTreePredictions(dataFrameTrain, decisionTree)
    accuracyTrain = calculateAccuracy(decisionTreeTrainResults, dataFrameTrain.iloc[:, -1]) * 100

    print("Training Completed ")

    # print("maxDepth = {}: ".format(i), end = "")
    # print("accTest = {0:.2f}%, ".format(accuracyTest), end = "")
    # print("accTrain = {0:.2f}%, ".format(accuracyTrain), end = "")
    # print("buildTime = {0:.2f}s".format(buildingTime), end = "\n")
    i += 1



@app.route('/')
def hello_world():
   return 'Decision Tree'

if __name__ == '__main__':
   app.run()
