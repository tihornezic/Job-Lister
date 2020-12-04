<footer class="container">
    <p>&copy; Job Lister 2020</p>
</footer>
</div> <!-- /container -->

</main>
<script type="text/javascript">
        const currentLocation = location.href;
        const menuItem = document.getElementsByClassName("nav-link");
        const menuLength = menuItem.length;
        // console.log(menuItem[0].className);
        for (let i = 0; i < menuLength; i++) {
            if (menuItem[i].href === currentLocation) {
                menuItem[i].className = "active nav-link"
            }
        }
    </script>
</body>

</html>