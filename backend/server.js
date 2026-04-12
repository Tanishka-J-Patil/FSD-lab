const express = require('express');
const mongoose = require('mongoose');
const cors = require('cors');

const app = express();
app.use(express.json());
app.use(cors());

// Connect MongoDB
mongoose.connect('mongodb+srv://admin:admin123@cluster1.xx0cd7q.mongodb.net/?appName=Cluster1')
.then(() => console.log("MongoDB Connected"))
.catch(err => console.log(err));

// Routes
const studentRoutes = require('./routes/studentRoutes');
app.use('/students', studentRoutes);

// Start server
app.listen(5000, () => {
    console.log("Server running on port 5000");
});