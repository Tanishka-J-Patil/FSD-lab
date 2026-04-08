body {
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #667eea, #764ba2);
    margin: 0;
    padding: 0;
    color: #333;
}

.container {
    width: 80%;
    margin: 30px auto;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
}

h2 {
    text-align: center;
    color: #444;
}

form {
    text-align: center;
}

input[type="text"] {
    padding: 10px;
    width: 250px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    padding: 10px 20px;
    background: #667eea;
    border: none;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background: #5a67d8;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th {
    background: #667eea;
    color: white;
    padding: 10px;
}

table td {
    padding: 10px;
    text-align: center;
}

table tr:nth-child(even) {
    background: #f2f2f2;
}

a {
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 5px;
}

a[href*="update"] {
    background: #28a745;
    color: white;
}

a[href*="delete"] {
    background: #dc3545;
    color: white;
}

a:hover {
    opacity: 0.8;
}