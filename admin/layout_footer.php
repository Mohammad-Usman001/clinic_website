
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');

            function toggleSidebar() {
                sidebar.classList.toggle('active');
                content.classList.toggle('active');
            }

            sidebarToggle.addEventListener('click', toggleSidebar);

            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', function(event) {
                const isClickInsideSidebar = sidebar.contains(event.target);
                const isClickInsideToggle = sidebarToggle.contains(event.target);
                if (!isClickInsideSidebar && !isClickInsideToggle && window.innerWidth <= 768) {
                    sidebar.classList.remove('active');
                    content.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>