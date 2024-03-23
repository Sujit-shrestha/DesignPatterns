<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>


# How to run the file  : 

##  Build the dockerfile : 

#### 1 : Goto the place here Dockerfile exists

#### 2: run the following command : 
    docker build -t pattern_image . 
    //here '.' is important
#### : Check if the image is built in the docker desktop

##  Build the dockerfile :

#### 1: run the image using the following command:
    docker run -p 8002:8000 pattern_image 

#### 2: Access the code throug localhost:8002

</body>
</html>

