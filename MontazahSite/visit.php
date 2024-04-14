<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Montaza Palace</title>
    <link rel="stylesheet" href="CSS/style_form_ui.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
    <div id="overlay" class="custom-overlay">
        <div id="dialog" class="custom-dialog"></div>
    </div>
    <?php include('header.php');?>
    <section>
        <div class="Topbar">
            <div class="textbar">
                <span>Visiit Us</span><br>
                <span><u>Home - visit Us </u></span>
            </div>
        </div>

    </section>

    <main>
        <div class="container">
            <div class="main-content">
                <form id="searchForm">
                    <label for="searchInput">Search:</label>
                    <input type="text" id="searchInput" placeholder="Search events"><br>
                </form>
    
                <div id="eventList">
                    <!-- Event items will be dynamically populated here -->
                </div>
            </div>
    
            <div class="sidebar">
                <h2>Filters</h2>
                <form id="filterForm">
                    <label for="dateFilter">Date:</label>
                    <input type="date" id="dateFilter"><br>
    
                    <label for="timeFilter">Time:</label>
                    <input type="time" id="timeFilter"><br>
    
                    <label for="categoryFilter">Category:</label>
                    <select id="categoryFilter">
                        <option value="all">All Categories</option>
                        <option value="history">History</option>
                        <option value="events">Events</option>
                        <option value="attractions">Attractions</option>
                    </select><br>
    
                    <button type="button" onclick="filterEvents()">Apply Filters</button>
                </form>
            </div>
        </div>
    
        <script>
            // Sample events data
            const eventsData = [
                {
                    id: 1,
                    title: "Event 1",
                    date: "2024-03-20",
                    time: "10:00 AM",
                    category: "events",
                    description: "Description of Event 1"
                },
                {
                    id: 2,
                    title: "Event 2",
                    date: "2024-03-21",
                    time: "02:00 PM",
                    category: "attractions",
                    description: "Description of Event 2"
                },
                 {
                    id: 3,
                    title: "History Event",
                    date: "2024-03-22",
                    time: "11:00 AM",
                    category: "history",
                    description: "Description of History Event"
                },
                // Add more event objects as needed
            ];
    
            // Function to display events
            function displayEvents(events) {
                const eventList = document.getElementById('eventList');
                eventList.innerHTML = ''; // Clear previous content
    
                events.forEach(event => {
                    const eventCard = document.createElement('div');
                    eventCard.className = 'custom-event-card'; // Updated class name here
                    eventCard.innerHTML = `
                        <img src="${getImageUrl(event.category)}" alt="${event.category}">
                        <div>
                            <h3>${event.title}</h3>
                            <p>Date: ${event.date}</p>
                            <p>Time: ${event.time}</p>
                            <p>Category: ${event.category}</p>
                            <p>Description: ${event.description}</p>
                        </div>
                    `;
                    eventList.appendChild(eventCard);
                });
            }
    
            // Function to get image URL based on category
            function getImageUrl(category) {
                switch (category) {
                    case 'history':
                        return 'img/history.svg'; // URL to history image
                    case 'events':
                        return 'img/events.svg'; // URL to events image
                    case 'attractions':
                        return 'img/attractions.svg'; // URL to attractions image
                    default:
                        return 'img/default.svg'; // Default image URL
                }
            }
    
            // Function to filter events based on user input
            function filterEvents() {
                // Get filter values
                const dateFilter = document.getElementById('dateFilter').value;
                const timeFilter = document.getElementById('timeFilter').value;
                const categoryFilter = document.getElementById('categoryFilter').value;
                const searchInput = document.getElementById('searchInput').value.toLowerCase();
    
                let filteredEvents = eventsData.filter(event => {
                    return (
                        (dateFilter === '' || event.date === dateFilter) &&
                        (timeFilter === '' || event.time.includes(timeFilter)) &&
                        (categoryFilter === 'all' || event.category === categoryFilter) &&
                        (searchInput === '' || event.title.toLowerCase().includes(searchInput))
                    );
                });
    
                displayEvents(filteredEvents);
            }
    
            // Initial display of all events
            displayEvents(eventsData);

          
        </script>
    </main>

    <?php include('footer.php');?>
</body>

</html>