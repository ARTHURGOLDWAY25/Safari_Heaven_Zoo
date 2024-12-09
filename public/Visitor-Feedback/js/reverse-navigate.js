document.addEventListener('DOMContentLoaded', function() {
    // Handle navigation to home
    const reverseNavigate = document.getElementById("home");

    if (reverseNavigate) {
        reverseNavigate.addEventListener('click', function(event) {
            event.preventDefault();

            fetch("js/projects_dynamic.json")
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Failed to fetch JSON");
                    }
                    return response.json();
                })
                .then(data => {
                    const currentPath = window.location.pathname;

                    // Determine current project based on URL
                    const currentProject = currentPath.includes("Visitor_Feedback-index.php")
                        ? "Visitor-Feedback"
                        : "ECF2024";

                    const targetProject = currentProject === "Visitor-Feedback"
                        ? "ECF2024"
                        : "Visitor-Feedback";

                    // Find the target project from the data
                    const target = data.find(project => project.name === targetProject);

                    if (target) {
                        // Navigate to the URL of the target project
                        window.location.href = target.url;
                    } else {
                        console.error("Target project not found");
                    }
                })
                .catch(error => {
                    console.error("Error fetching the JSON file:", error);
                });
        });
    }
});
