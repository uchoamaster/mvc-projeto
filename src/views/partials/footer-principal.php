


            <!-- REQUIRED SCRIPTS -->
            <script src="https://unpkg.com/draggabilly@2.2.0/dist/draggabilly.pkgd.min.js"></script>
            <script src="<?=$base;?>/dist/js/chrome-tabs.js"></script>
            <script>
                var el = document.querySelector('.chrome-tabs')
                var chromeTabs = new ChromeTabs()

                chromeTabs.init(el)

                el.addEventListener('activeTabChange', ({
                    detail
                }) => console.log('Active tab changed', detail.tabEl))
                el.addEventListener('tabAdd', ({
                    detail
                }) => console.log('Tab added', detail.tabEl))
                el.addEventListener('tabRemove', ({
                    detail
                }) => console.log('Tab removed', detail.tabEl))

                document.querySelector('button[data-add-tab]').addEventListener('click', _ => {
                    chromeTabs.addTab({
                        title: 'Nova Aba',
                        favicon: false
                    })
                })

                document.querySelector('button[data-add-background-tab]').addEventListener('click', _ => {
                    chromeTabs.addTab({
                        title: 'Nova Aba',
                        favicon: false
                    }, {
                        background: true
                    })
                })

                document.querySelector('button[data-remove-tab]').addEventListener('click', _ => {
                    chromeTabs.removeTab(chromeTabs.activeTabEl)
                })

                document.querySelector('button[data-theme-toggle]').addEventListener('click', _ => {
                    if (el.classList.contains('chrome-tabs-dark-theme')) {
                        document.documentElement.classList.remove('dark-theme')
                        el.classList.remove('chrome-tabs-dark-theme')
                    } else {
                        document.documentElement.classList.add('dark-theme')
                        el.classList.add('chrome-tabs-dark-theme')
                    }
                })

                window.addEventListener('keydown', (event) => {
                    if (event.ctrlKey && event.key === 't') {
                        chromeTabs.addTab({
                            title: 'New Tab',
                            favicon: false
                        })
                    }
                })
            </script>
            <!-- jQuery -->
            <script src="<?=$base;?>/plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="<?=$base;?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- AdminLTE App -->
            <script src="<?=$base;?>/dist/js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="<?=$base;?>/dist/js/demo.js"></script>

            <!-- DataTables  & Plugins -->
            <script src="<?=$base;?>/plugins/datatables/jquery.dataTables.min.js"></script>
            <script src="<?=$base;?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
            <script src="<?=$base;?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
            <script src="<?=$base;?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
            <script src="<?=$base;?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
            <script src="<?=$base;?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
            <script src="<?=$base;?>/plugins/jszip/jszip.min.js"></script>
            <script src="<?=$base;?>/plugins/pdfmake/pdfmake.min.js"></script>
            <script src="<?=$base;?>/plugins/pdfmake/vfs_fonts.js"></script>
            <script src="<?=$base;?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
            <script src="<?=$base;?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
            <script src="<?=$base;?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

            
            <script src="<?=$base;?>/docs/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?=$base;?>/docs/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
var currentTheme = localStorage.getItem('theme');
var mainHeader = document.querySelector('.main-header');

if (currentTheme) {
if (currentTheme === 'dark') {
    if (!document.body.classList.contains('dark-mode')) {
        document.body.classList.add("dark-mode");
    }
    if (mainHeader.classList.contains('navbar-light')) {
        mainHeader.classList.add('navbar-dark');
        mainHeader.classList.remove('navbar-light');
    }
    toggleSwitch.checked = true;
}
}

function switchTheme(e) {
if (e.target.checked) {
    if (!document.body.classList.contains('dark-mode')) {
        document.body.classList.add("dark-mode");
    }
    if (mainHeader.classList.contains('navbar-light')) {
        mainHeader.classList.add('navbar-dark');
        mainHeader.classList.remove('navbar-light');
    }
    localStorage.setItem('theme', 'dark');
} else {
    if (document.body.classList.contains('dark-mode')) {
        document.body.classList.remove("dark-mode");
    }
    if (mainHeader.classList.contains('navbar-dark')) {
        mainHeader.classList.add('navbar-light');
        mainHeader.classList.remove('navbar-dark');
    }
    localStorage.setItem('theme', 'light');
}
}

toggleSwitch.addEventListener('change', switchTheme, false);
</script>

</body>

</html>
