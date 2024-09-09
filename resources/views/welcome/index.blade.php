<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewPort" content="widith=device-width, initial-scale=1">
    <title>My to do list</title>
   <link rel="stylesheet" href="assets/style.css">
   <div class="card-header">
    <h5 class="mb-0"><h2>WellCome to Techive To-Do list APP</h2><span class="badge bg-primary rounded-pill"></span>
    
    </h5>
 </div>
</head>

<body>
    <div class="container">
        <div class="toDo-app">
            <h2>hello this is todo list <image src="{{asset('assets/images/icon.png')}}" alt="images"> </h2>
                <div class="row">
                    <input type="text" id="input-box" placeholder="Add Your Text">
                    <button onclick="addTask()">Add</button>
                </div>
                <ul id="list-container">
                    <!-- <li class="checked">Task 1</li>
                    <li>Task 2</li>
                    <li>Task 3</li>
                    <li>Task 4</li> -->
                </ul>
        </div>
    </div>
    <script src="assets/script.js"></script>
</body>
</html>