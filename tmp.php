<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            padding: 0;
            height: 100vh;
            margin:0;
        }
        
        .container{
            margin: auto ;
            margin-top: 40px;
            background-color: white;
            height: fit-content;
            width: fit-content;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 5px 5px darkgrey;
        }
        #form-login{
            margin:auto ;
            text-align: center;
        }
        #form-login>input[type=text]{
            width: 100%;
            height: 100%;
        }
        #form-login>input[type=password]{
            width: 100%;
            height: 100%;

        }
        #form-login{
            font-size: 20px;
        }
        nav{
            margin: 0;
            padding: 0;
            height: 60px;
            background-color: white;
            text-align: center;
            align-content: center;
            width: 100%;
            position: sticky;
        }
        nav>ul{
            list-style-type: none;
        }
        nav>ul>li{
            padding: 10px;
            display: inline-block;
            margin: auto;
        }
        nav>ul>li:hover{
            background-color: lightgray;
        }
        nav>ul>li>a{
            color:black;
            text-decoration: none;
        }
        .grid{
            display: grid;
            grid-template-columns: auto auto auto;
            margin: auto;
            padding:40px;
            column-gap: 20px;
        }
        .grid-items{
            background-color: white;
            border: solid 10px black;
            border-radius: 20px;
            text-align: center;
            padding: 20px;
            align-content: center;
            max-width: 400px;
            
        }
        .grid-items>a{
            text-decoration: none;
            color:black;
        }
        .items{
            background-color: lightskyblue;
            width: 50px;
            height:50px;
            border-radius: 40px;
            margin: auto;
        }
        #demo{
            background-color: white;
            color: black;
        }
    </style>
   
</head>
<body>
    
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
    </nav>

    <div class="grid">
        <div class="grid-items">
            <div class="items" style="background-color:midnightblue"></div>
            <a href="#" onclick="fetchItems(event)">
                <p>Men</p>
            </a>       
        </div>
        <div class="grid-items">
            <div class="items" style="background-color:lightpink"></div>
            <a href="#" onclick="fetchItems(event)">
                <p>Women</p>
            </a>
            
        </div>
        <div class="grid-items">
            <div class="items" style="background-color:lightskyblue"></div>
            <a href="#" onclick="fetchItems(event)">
                <p>Kids</p>
            </a>
        </div>
    </div>
    <div id="demo">

    </div>
    <script>
        function fetchItems(event){
            e=document.getElementById('products')
            console.log('done')
            console.log(event.target.innerText)
            xhr=new XMLHttpRequest()
            xhr.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                    e.innerHTML=this.responseText
                }
            }
            xhr.open('GET', 'product.php?category='+event.target.innerText, true);
            xhr.send();
        }
    </script>
    <div class="container" id="products">

    </div>
    <div class="container">
        <h2 style="text-align: center;">Login</h2>
        <form action="" id="form-login">
            <table>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" id="email" required></td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pwd" id="" required></td>
            </tr>
            <tr></tr>
            <tr></tr>
            </table>
            <input type="submit" value="Login">
        </form>
    </div>

</body>
</html>