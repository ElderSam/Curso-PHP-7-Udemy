<style>
     nav{
        padding: 1rem;
        background-color: lightgrey;
     }
     nav a{
         padding-left: 1rem;
     }
     nav #right{
        position: absolute; 
        right: 1%;
        padding: 1rem;
        top: 0.7rem;
     }
    </style>
</head>
<body>
    <nav>
        <a href="dashboard.php">Home</a>
        <a href="posts.php">Posts</a>
        <a href="friends.php">Friends</a>
        <a href="groups.php">Groups</a>
        <div id="right">
            <a><?php echo "Usuário: ". $_SESSION['user']; ?></a>
            <a href="config.php?loggout">SAIR</a>
        </div>
        
    </nav>