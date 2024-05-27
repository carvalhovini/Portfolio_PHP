<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Vinicius Carvalho - Portfolio</title>
</head>
<body class="dark-theme">
    <header>
        <div class="profile">
            <img src="{{ asset('IMG/profile.jpeg') }}" alt="Your Photo">
            <h1>Vinicius Carvalho</h1>
            <p>Software Engineering | Data Science | Machine Learning</p>
            <div class="social-links">
                <a href="https://www.linkedin.com/in/vinicius-carvalho-silva-a602a91b9/" target="_blank">LinkedIn</a>
                <a href="https://github.com/carvalhovini" target="_blank">GitHub</a>
                <a href="#about-me">About Me</a>
                <div>
                    <br>
                    <a href="PT-BR CV - Vinicius Carvalho Silva.pdf" download="Vinicius_Carvalho_CV_PT-BR.pdf">Resume PT-BR</a>
                    <a href="EN CV - Vinicius Carvalho Silva.pdf" download="Vinicius_Carvalho_CV_EN.pdf">Resume EN</a>
                </div>
            </div>
        </div>
    </header>

    
    

    <section class="projects">

        <!-- Project 1 - Facial Recognition -->
        <div class="project">
            <div class="project-media">
                <a href="https://www.linkedin.com/feed/update/urn:li:activity:7155162396251107330/" target="_blank">
                    <img src="./IMG/projeto7.jpg" alt="Project in Progress">
                </a>
            </div>
            <div class="project-info">
                <h2>Facial Recognition and Computer Vision with JavaScript</h2>
                <p>Developed a project in JavaScript exploring computer vision. Migration from Python to JavaScript to broaden knowledge.</p>
                <p>Features:
                    <br>
                    <br> - Facial Detection: Utilized the Face-api.js library for real-time detection.
                    <br> - Virtual Glasses Addition: Overlay virtual glasses on detected faces.
                    <br> - Continuous Learning: Constantly evolving, planning to add more functionalities.
                </p>
                <img aling="center" alt="JavaScript" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" /> 
                <img aling="center" alt="HTML5" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" /> 
                <img aling="center" alt="CSS3" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" /> 
                <p>
                    <a href="https://github.com/carvalhovini/facial_recognition_JS" target="_blank">
                        GitHub Repository
                    </a>
                </p>
            </div>
        </div>

        <!-- Project 2 People Counting -->
        <div class="project reverse">
            <div class="project-media project1">
                <a href="https://www.linkedin.com/feed/update/urn:li:activity:7155580487510433794/" target="_blank">
                    <img src="./IMG/projeto8.jpeg" alt="Project Image">
                </a>
            </div>
            <div class="project-info">
                <h2>Machine Learning with JavaScript</h2>
                <p>Explored the world of machine learning using JavaScript and TensorFlow.js. In the latest project, developed a feature to count people in images and videos, using the COCO-SSD model for real-time detection.</p>
                <p>Featured Technologies:
                    <br> - TensorFlow.js: Powerful machine learning library for JavaScript.
                    <br> - COCO-SSD: Pre-trained model for object detection, used for counting people.
                    <br> - JavaScript: Agile and flexible language, allowing direct implementation in the browser.
                </p>
                <img aling="center" alt="JavaScript" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" /> 
                <img aling="center" alt="tensorflow" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tensorflow/tensorflow-original.svg" />
                <img aling="center" alt="HTML5" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" /> 
                <img aling="center" alt="CSS3" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" /> 
                <p>
                    <a href="https://github.com/carvalhovini/people-counter/" target="_blank">GitHub Repository</a>
                </p>
            </div>
        </div>
        <!-- Project 3 Neon Drawing with Hand Movements -->
        <div class="project">
            <div class="project-media">
                <a href="https://www.linkedin.com/feed/update/urn:li:activity:7095118113658052608/" target="_blank">
                    <img src="./IMG/projeto1.jpeg" alt="Project 1">
                </a>
            </div>
            <div class="project-info">
                <h2>Neon Drawing with Hand Movements</h2>
                <p>An interactive drawing application that uses hand movements to create neon drawings.</p>
                <p>Features:
                    <br> - Simplicity: Minimalist interface to focus on the drawing experience.
                    <br> - Intuitive: The application responds to hand movements in real-time.
                    <br> - Creativity: Choose different neon colors to customize your drawings.
                </p>
                <img aling="center" alt="Python" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" /> 
                <img aling="center" alt="opencv" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/opencv/opencv-original.svg" />    
                <p>
                    <a href="https://github.com/carvalhovini/Python_cam" target="_blank">
                        GitHub Repository
                    </a>
                </p>
            </div>
        </div>

        <!-- Project 4 Flappy Bird with Artificial Intelligence -->
        <div class="project reverse">
            <div class="project-media project2">
                <a href="https://www.linkedin.com/feed/update/urn:li:activity:7140421142778990593/" target="_blank">
                    <img src="./IMG/projeto2.jpeg" alt="Project 2">
                </a>
            </div>
            <div class="project-info">
                <h2>Flappy Bird with Artificial Intelligence</h2>
                <p>Developed a Flappy Bird game where birds are controlled by a neural network trained through genetic algorithms.</p>
                <p>Features:
                    <br> - Birds evolve and improve their scores over successive generations.
                    <br> - Neural network adapts to optimize bird behavior, avoiding pipes and increasing survival chances.
                </p>
                <img aling="center" alt="Python" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" /> 
                <p>
                <a href="https://github.com/carvalhovini/Flappy_Bird_NEURAL" target="_blank">GitHub Repository</a>
            </div>
        </div>

        <!-- Project 5 Facial Recognition with Tkinter and OpenCV -->
        <div class="project">
            <div class="project-media">
                <a href="https://www.linkedin.com/feed/update/urn:li:activity:7074364184364220416/" target="_blank">
                    <img src="./IMG/projeto3.jpeg" alt="Project 3">
                </a>
            </div>
            <div class="project-info">
                <h2>Facial Recognition with Tkinter and OpenCV</h2>
                <p>Excited to share my first Facial Recognition project! Explored Tkinter and OpenCV libraries to create a powerful and intuitive application.</p>
                <p>Main Features:
                    <br> - Addition, verification, and recognition of faces.
                    <br> - Demonstration in four images illustrating the process.
                </p>
                <img aling="center" alt="Python" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" /> 
                <img aling="center" alt="opencv" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/opencv/opencv-original.svg" /> 
                <p>
                <a href="https://github.com/carvalhovini/Face_test" target="_blank">GitHub Repository</a>
            </div>
        </div>

        <!-- Project 6 Snake Game with AI in Python -->
        <div class="project reverse">
            <div class="project-media">
                <a href="https://www.linkedin.com/feed/update/urn:li:activity:7103457968729276416/" target="_blank">
                    <img src="./IMG/projeto4.jpeg" alt="Project 4">
                </a>
            </div>
            <div class="project-info">
                <h2>Snake Game with AI in Python</h2>
                <p>Sharing my journey of developing a Snake game with AI in Python! Immersed myself in an exciting project that challenged and inspired me in various ways.</p>
                <p>Development:
                    <br> - Intensive learning about Artificial Intelligence and Machine Learning.
                    <br> - Development of a Snake game that learns to play on its own.
                </p>
                <img aling="center" alt="Python" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" /> 
                <img aling="center" alt="numpy" height="30" width="30" src ="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/numpy/numpy-original.svg" />
                <img aling="center" alt="tensorflow" height="30" width="30" src ="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tensorflow/tensorflow-original.svg" />
                <p>

                <p>Note: The project is not yet completed, but I have more to do, so it will be on standby.</p>
                <a href="https://github.com/carvalhovini/Teste_IA" target="_blank">GitHub Repository</a>
            </div>
        </div>

        <!-- Project 7 Task Management with OOP -->
        <div class="project">
            <div class="project-media">
                <img src="./IMG/projeto5.1.jpeg" alt="Project 5">
                <p>
                <p>
                <img src="./IMG/projeto5.2.jpeg" alt="Project 5">
            </div>
            <div class="project-info">
                <h2>Task Management with Object-Oriented Programming</h2>
                <p>Developed a task management system using Object-Oriented Programming.</p>
                <p><strong>Objective:</strong> Solve the daily organization problem, allowing users to create, update, and remove tasks.</p>
                <h3>Main Concepts:</h3>
                <ul>
                    <li><strong>Class:</strong> Task, TaskList, User.</li>
                    <li><strong>Object:</strong> task1, taskList, user1.</li>
                    <li><strong>Encapsulation:</strong> Private attributes and getter/setter methods.</li>
                    <li><strong>Constructor Method:</strong> Initialization of attributes when creating objects.</li>
                </ul>
                <h3>Tests Performed:</h3>
                <ul>
                    <li>Add a new task.</li>
                    <li>Update the status of a task.</li>
                    <li>Display the task list.</li>
                    <li>Remove a task.</li>
                </ul>
                <h3>Future Improvements:</h3>
                <table>
                    <tr>
                        <th>No.</th>
                        <th>Improvement</th>
                        <th>Justification</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Add task priorities</td>
                        <td>Highlight more important tasks.</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Implement task categories</td>
                        <td>Facilitate organization and filtering.</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Notifications and reminders</td>
                        <td>Alert about task deadlines.</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Task sharing</td>
                        <td>Collaboration on projects and team activities.</td>
                    </tr>
                </table>
            </p>
            <img aling="center" alt="Java" height="30" width="50" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original-wordmark.svg" />
            <p>
                <a href="https://github.com/carvalhovini/projeto.final_java/tree/main" target="_blank">GitHub Repository</a>
            </div>
        </div>

        <!-- Project 8 - Inheritance in OOP -->
        <div class="project reverse">
            <div class="project-media">
                <a href="https://www.linkedin.com/feed/update/urn:li:activity:7103457968729276416/" target="_blank">
                    <img src="./IMG/projeto6.jpeg" alt="Project 4">
                </a>
            </div>
            <div class="project-info">
                <h2>Inheritance in Object-Oriented Programming</h2>
                <p>Exploration of the concept of inheritance in OOP through practical examples.</p>
                <!-- Code 1 -->
                <h3>Code 1 - Animal Hierarchy</h3>
                <p>Implementation of abstract classes and inheritance to represent animals.</p>
                <!-- Code 2 -->
                <h3>Code 2 - Geometric Shapes Hierarchy</h3>
                <p>Utilization of inheritance to calculate the area of different geometric shapes.</p>
                <!-- Code 3 -->
                <h3>Code 3 - Bank Account Hierarchy</h3>
                <p>Application of the inheritance concept in a banking account system.</p>
                <!-- Code 4 -->
                <h3>Code 4 - Vehicle Hierarchy</h3>
                <p>Representation of vehicles using inheritance and abstract classes.</p>
            </p>
            <img aling="center" alt="Java" heigth="30" width="50" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original-wordmark.svg" />
            <p>
                <a href="https://github.com/carvalhovini/Heranca_POO" target="_blank">Repositório no GitHub</a>
            </div>
        </div>

        <!-- About Me -->
        <div id="about-me" class="about-me">
            <h2>About Me</h2>
            <p>I am a seventh-semester Software Engineering student with strong skills in languages such as Python, Java, JavaScript, and C++. My passion for programming extends to the fields of Machine Learning and Data Science, areas I am eager to explore more deeply.</p>

            <p>In my free time, I stay updated with the latest technological trends, actively participate in open-source projects on my GitHub profile, and am always looking for challenges that allow me to apply and enhance my skills, contributing to the software development community.</p>
            <div>
                <div style="display: inline_block"><br/>
                    <img aling="center" alt="C" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/c/c-original.svg" />
                    <img aling="center" alt="C++" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg" />  
                    <img aling="center" alt="Java" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original-wordmark.svg" />  
                    <img aling="center" alt="Python" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" /> 
                    <img aling="center" alt="JavaScript" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" /> 
                    <img aling="center" alt="HTML" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" /> 
                    <img aling="center" alt="CSS" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" /> 
                    <img aling="center" alt="MySQL" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg" />
                    <img aling="center" alt="OpenCV" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/opencv/opencv-original.svg" /> 
                    <img aling="center" alt="TensorFlow" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tensorflow/tensorflow-original.svg" />
                </div><br/>
            </div>
        </div>
</section>

<section class="comments">
    <h2>Leave a Comment</h2>
    <form action="{{ route('comments.store') }}" method="POST" class="comment-form">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>


    <script src="{{ asset('scripts.js') }}"></script>
</body>
</html>