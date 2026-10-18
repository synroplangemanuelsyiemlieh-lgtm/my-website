<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Foodhub</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        .foodhub-brand {
            color: #e87516;
            font-family: "Trebuchet MS", Arial, sans-serif;
            font-size: 1.5rem;
            font-weight: 800;
            letter-spacing: 0.04em;
            text-shadow: 1px 1px 0 #a84e0b,
                         2px 2px 0 #a84e0b,
                         3px 3px 0 #85400d,
                         4px 4px 3px rgba(0, 0, 0, 0.3);
        }

        /* --- Custom Theme Colors for Search Bar --- */

        /* 1. The input border color and outline when typing */
        .custom-search-input {
            border: 2px solid #f26b21 !important;
        }
        .custom-search-input:focus {
            box-shadow: 0 0 0 0.25rem rgba(242, 107, 33, 0.25) !important;
            border-color: #f26b21 !important;
        }

        /* 2. Custom Theme Search Button */
        .btn-theme-outline {
            color: #f26b21 !important;
            border-color: #f26b21 !important;
            font-weight: 600;
            transition: all 0.2s ease-in-out;
        }
        /* Container framework */
        .hero-container {
            display: flex;
            align-items: center;
        }

        /* 1. Forces the image to align perfectly to the right side edge */
        .hero-bg-image {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: auto;
            object-fit: contain;
            z-index: 0;
        }

        /* 2. The smooth blend overlay from text (dark) to food (bright) */
        .hero-gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, #fde3d4 0%, #f39e70 45%, rgba(248, 156, 123, 0.7) 60%, rgba(255, 244, 238, 0) 100%);
            z-index: 1;
            pointer-events: none; /* Allows you to still click buttons underneath */
        }

        /* 3. Forces the text to float cleanly on top of the graphics layer */
        .z-2 {
            z-index: 2;
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container-fluid">

            <!-- Brand Logo and Name -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Restaurant" loading="lazy" title="Restaurant" width="56" height="56">
                <span class="foodhub-brand">Foodhub</span>
            </a>

            <!-- Mobile Toggle Button (Required once for structure) -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Combined Wrapper to handle alignment -->
            <div class="collapse navbar-collapse" id="navbarID">

                <!-- Search Bar (Centered via mx-auto) -->
                <form class="d-flex mx-auto my-2 my-sm-0" style="max-width: 400px; width: 100%;">
                <input class="form-control custom-search-input me-2" type="search" placeholder="Search food..." aria-label="Search">
                    <button class="btn btn-theme-outline" type="submit">Search</button>
                </form>

                <!-- Navigation Links (Pushed to the right via ms-auto) -->
                <div class="navbar-nav ms-auto gap-3">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="#">Contact</a>
                    <a class="nav-link" href="#">Account</a>
                </div>

            </div>

        </div>
    </nav>
    <main class="container my-4">
    <!-- The hero box has a dark theme background (#1a1a1a) and rounded corners -->
        <section class="hero-container position-relative overflow-hidden p-5 rounded-4" style="background-color: #fff4ee; min-height: 480px;">

            <!-- THE BACKGROUND IMAGE: Positioned absolutely to the far right side -->
            <img src="{{ asset('images/image.png') }}" alt="Delicious Food" class="hero-bg-image">

            <!-- THE GRADIENT OVERLAY: Perfectly blends the dark background into the image -->
        <div class="hero-gradient-overlay"></div>

            <!-- THE CONTENT LAYER: Sits safely on top of everything -->
            <div class="row align-items-center h-100 position-relative z-2">
                <div class="col-12 col-md-8 ps-md-4">
                    <p class="text-uppercase text-warning fw-bold mb-2">Good food, Good mood</p>
                    <h1 class="text-dark display-5 fw-bold lh-sm mb-3">
                    Delicious Food <br>
                    <span class="text-warning">Delivered Fast</span>
                    </h1>
                    <p class="text-mute mb-4 fs-5">
                    Discover great restaurants, delicious Cuisines and Your favourites local food.
                    </p>
                    <a href="#dishes" class="btn btn-warning fw-bold px-4 py-2 me-2">Order Now</a>
                    <a href="#Cuisines" class="btn btn-outline-light fw-bold px-4 py-2 text-dark">Explore Cuisines</a>
                </div>
            </div>
        </section>
    </main>
    @section('content')
                                <div class="container">
                                <h1>All Categories</h1>

                                @if(session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Category Name</th>
                                            <th>Total Menus Attached</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>
                                                    <!-- Displays the image you stored in the public folder -->
                                                    <img src="{{ asset('category_photos/' . $category->img) }}" alt="{{ $category->name }}" width="50">
                                                </td>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    <!-- Crucial: withCount('menus') gives you this exact variable name -->
                                                    <span class="badge bg-primary">{{ $category->menus_count }} menus</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endsection


    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>