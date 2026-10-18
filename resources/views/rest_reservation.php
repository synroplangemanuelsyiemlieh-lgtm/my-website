
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartnerHub - Reservation Desk</title>
    <!-- Local Bootstrap CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body class="bg-light">

    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"> Partner</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href='rest_index'>Home</a></li>
                    <li class="nav-item"><a class="nav-link " href='restaurantprofile'>Edit Profile</a></li>
                    <li class="nav-item"><a class="nav-link " href='rest_editM'>Menu Edit</a></li>
                    <li class="nav-item"><a class="nav-link active" href='rest_reservation'>Reservations</a></li>
                    <li class="nav-item"><a class="nav-link" href='rest_delistf'>Deliveries</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href='logout'>Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Workspace Container -->
    <main class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h2 class="h4 card-title fw-bold text-dark m-0">Table Bookings & Reservations</h2>
                            <p class="text-muted small m-0">Monitor, schedule, and cancel upcoming customer seating reservations in real time.</p>
                        </div>
                        <span class="badge bg-primary px-3 py-2 rounded-pill">Live Tracking</span>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle border">
                            <thead class="table-light">
                                <tr>
                                    <th>Reservation ID</th>
                                    <th>Customer Name</th>
                                    <th>Phone / Contact</th>
                                    <th>Guests</th>
                                    <th>Date & Time</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Local Bootstrap JS Script -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        function removeReservation(button) {
            // Confirm explicitly with the desktop manager prior to row cleanup operations
            if (!confirm("Are you sure you want to cancel and remove this reservation from the live list?")) {
                return;
            }

            const resId = button.getAttribute('data-id');
            const formData = new FormData();
            formData.append('id', resId);

            // Fetch request targeting background database deletion handler
            fetch('include/reservation_del.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Smoothly remove the visual element container row
                    const row = document.getElementById('res-row-' + resId);
                    if(row) {
                        row.style.transition = 'all 0.3s ease';
                        row.style.opacity = '0';
                        setTimeout(() => row.remove(), 300);
                    }
                    alert('Reservation removed successfully.');
                } else {
                    alert('Failed to remove the reservation: ' + (data.message || 'Database error'));
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('A network exception occurred while updating records.');
            });
        }
    </script>
</body>
</html>
