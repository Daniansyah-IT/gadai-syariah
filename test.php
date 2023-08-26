<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Search</title>
</head>
<body>
  <div class="container mt-5">
    <h1>Website Search</h1>
    <input type="text" id="searchInput" placeholder="Search...">
    <button id="searchButton">Search</button>
    <div id="searchResults"></div>
  </div>

  <div class="container mt-3">
    <h2>Page Content</h2>
    <p>This is some sample content for searching.</p>
    <p>Another paragraph with important information.</p>
    <p>Here's more content that you can search.</p>
  </div>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Card with Image on Left and Text on Right</title>
  <style>
    /* Custom CSS */
    .card-img-left {
      order: -1;
      width: 100%; /* Adjust as needed */
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1>Card with Image on Left and Text on Right</h1>
    <div class="card">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="image.jpg" class="card-img card-img-left" alt="Card Image">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card Title</h5>
            <p class="card-text">This is some sample text for the card body.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
            <div class="col-lg-12">
                <h2 class="center-text">News</h2>
                <?php
                $sql = "SELECT id, title, content, image FROM news";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-md-6">
                                <div class="card">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <img src="' . $row['image'] . '" class="card-img-top" alt="' . $row['title'] . '">
                                    </div>
                                    <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title">' . $row['title'] . '</h5>
                                        <p class="card-text">' . $row['content'] . '</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>';
                      }
                
                   
                } else {
                    echo '<p>No news found.</p>';
                }

                $conn->close();
                ?>
            </div>
        </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


  <script>
    const searchInput = document.getElementById('searchInput');
    const searchButton = document.getElementById('searchButton');
    const searchResults = document.getElementById('searchResults');

    searchButton.addEventListener('click', function() {
      const searchTerm = searchInput.value;
      performSearch(searchTerm);
    });

    function performSearch(term) {
      const contentElements = document.querySelectorAll('.container p');
      const results = [];

      contentElements.forEach(element => {
        const content = element.textContent;
        if (content.includes(term)) {
          results.push(content);
        }
      });

      displaySearchResults(results);
    }

    function displaySearchResults(results) {
      searchResults.innerHTML = '';
      if (results.length === 0) {
        searchResults.innerHTML = 'No results found.';
        return;
      }
      const ul = document.createElement('ul');
      results.forEach(result => {
        const li = document.createElement('li');
        li.textContent = result;
        ul.appendChild(li);
      });
      searchResults.appendChild(ul);
    }
  </script>
</body>
</html>
