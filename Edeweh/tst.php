<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Navbar Styles */
        .navbar {
            background: linear-gradient(90deg, #000000, #FFD700);
            z-index: 1030;
        }

        .navbar-brand span {
            font-family: "Brush Script MT", cursive;
            font-size: 1rem;
        }

        .brush-script {
            font-family: 'Brush Script MT', cursive;
        }

        .nav-link {
            font-family: "Varela Round", sans-serif;
            color: #FFD700 !important;
        }

        .nav-link:hover {
            color: #000000 !important;
        }

        /* Profile and Dropdown Styles */
        .profile-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }

        .dropdown-menu {
            display: none;
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .modal .dropdown-menu {
            display: block !important;
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        /* Button Styles */
        .btn-dark:hover {
            background-color: #FFD700 !important;
            color: #000000 !important;
            border: 1px solid #000000 !important;
        }

        /* Division Card Styles */
        .division-card {
            transition: all 0.3s ease;
            height: 100%;
            border: none;
            background-color: transparent;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            margin-bottom: 20px;
        }
        
        .division-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #ff6b6b, #ffd93d);
            opacity: 0;
            transition: all 0.3s ease;
            z-index: -1;
            border-radius: 15px;
        }
        
        .division-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .division-card:hover::before {
            opacity: 0.1;
        }
        
        .division-card:hover .division-icon {
            transform: scale(1.1) rotate(5deg);
            background-color: #fd7e14;
        }
        
        .division-card:hover .division-icon i {
            color: white;
        }
        
        .division-card:active {
            transform: scale(0.95);
        }

        /* Icon Styles */
        .division-icon {
            width: 60px;
            height: 60px;
            background-color: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            transition: all 0.3s ease;
        }

        .division-icon i {
            font-size: 24px;
            color: #fd7e14;
            transition: all 0.3s ease;
        }

        /* Logo Animation */
        .center-logo {
            max-width: 250px;
            margin: 2rem auto;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        /* Text Styles */
        .card-text {
            color: #6c757d;
            font-size: 0.85rem;
        }

        .card-title {
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 0.8rem;
        }

        .page-title {
            position: relative;
            display: inline-block;
        }

        .page-title::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 3px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(90deg, #fd7e14, #ffd93d);
            border-radius: 2px;
        }

        /* Layout Styles */
        .logo-section {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100%;
        }

        /* Responsive Styles */
        @media (max-width: 991px) {
            .order-md-first {
                order: -1;
            }
            .center-logo {
                max-width: 200px;
                margin: 1rem auto;
            }
        }
    </style>
</head>
</html>