<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="script.js?v=<$php rand(); $>"></script>
    <script>document.write('<link rel="stylesheet" type="text/css" href=styles.css?v="' + Math.floor(Math.random() * 1000) + '" />');</script>
</head>
<body>

        <h1>JavaScript Lesson 3</h1>

        <p>
            The focus of this lesson is <b>functions</b>. We will use this calculator example to
            explore how functions work, use parameters, return values, and call other functions.
        </p>
        <p>what is x*y/z if X= 20 Y=50 and if Z=35</p>

        <form>
            Value 1: <input type="text" id="value1" name="value1" />
            <br />
            Value 2: <input type="text" id="value2" name="value2" />
            <br />
            <button type="button" onclick="add()">+</button>
            <button type="button" onclick="subtract()">-</button>
            <button type="button" onclick="multiply()">*</button>
            <button type="button" onclick="divide()">/</button>
            <button type="button" onclick="squareroot()">squareroot</button>
            <button type="button" onclick="pi()">pi</button>
        </form>

        Result: <span id="result"></span>
        <br></br>
        
        
        
        <p>find the circumference of the givin circle </p>
        <br></br>
       <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Circle-withsegments.svg/210px-Circle-withsegments.svg.png">
          <form>
            radius: <input type="text" id="radius" name="radius" />
            <br />
            <button type="button" onclick="circumference()">circumference</button>
        </form>
        Result: <span id="circumference"></span>
        <br></br>
        
        
        
        
        <p>find the value of X </p>
        <br></br>
        <img src="https://cdn.kastatic.org/ka-exercise-screenshots/triangle_angles_1.png">
         <form>
            angle1: <input type="text" id="angle1" name="angle1" />
            <br />
            angle2: <input type="text"id="angle2"name= angle2/>
            <button type="button" onclick="findAngle()">circumference</button>
        </form>
        Result: <span id="angle3"></span>
 
</body>
</html>