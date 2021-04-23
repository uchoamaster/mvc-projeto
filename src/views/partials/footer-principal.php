


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
            <!-- jQuery UI -->
            <script src="<?=$base;?>/plugins/jquery-ui/jquery-ui.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="<?=$base;?>/dist/js/demo.js"></script>
            <!-- Bootstrap 4 -->
            <script src="<?=$base;?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- AdminLTE App -->
            <script src="<?=$base;?>/dist/js/adminlte.min.js"></script>
            <!-- script.js -->
            <script type="text/javascript" src="<?=$base;?>/dist/js/script.js"></script>


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
                        <!-- fullCalendar 2.2.5 -->
            <script src="<?=$base;?>/plugins/moment/moment.min.js"></script>
            <script src="<?=$base;?>/plugins/fullcalendar/main.js"></script>
            
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
   <!-- Page specific script -->
   <script>
        $(function() {

            /* initialize the external events
             -----------------------------------------------------------------*/
            function ini_events(ele) {
                ele.each(function() {

                    // create an Event Object (https://fullcalendar.io/docs/event-object)
                    // it doesn't need to have a start or end
                    var eventObject = {
                        title: $.trim($(this).text()) // use the element's text as the event title
                    }

                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject)

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex: 1070,
                        revert: true, // will cause the event to go back to its
                        revertDuration: 0 //  original position after the drag
                    })

                })
            }

            ini_events($('#external-events div.external-event'))

            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date()
            var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear()

            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendar.Draggable;

            var containerEl = document.getElementById('external-events');
            var checkbox = document.getElementById('drop-remove');
            var calendarEl = document.getElementById('calendar');

            // initialize the external events
            // -----------------------------------------------------------------

            new Draggable(containerEl, {
                itemSelector: '.external-event',
                eventData: function(eventEl) {
                    return {
                        title: eventEl.innerText,
                        backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                        borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                        textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
                    };
                }
            });

            var calendar = new Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                themeSystem: 'bootstrap',
                //Random default events
                events: [{
                    title: 'All Day Event',
                    start: new Date(y, m, 1),
                    backgroundColor: '#f56954', //red
                    borderColor: '#f56954', //red
                    allDay: true
                }, {
                    title: 'Long Event',
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2),
                    backgroundColor: '#f39c12', //yellow
                    borderColor: '#f39c12' //yellow
                }, {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false,
                    backgroundColor: '#0073b7', //Blue
                    borderColor: '#0073b7' //Blue
                }, {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false,
                    backgroundColor: '#00c0ef', //Info (aqua)
                    borderColor: '#00c0ef' //Info (aqua)
                }, {
                    title: 'Birthday Party',
                    start: new Date(y, m, d + 1, 19, 0),
                    end: new Date(y, m, d + 1, 22, 30),
                    allDay: false,
                    backgroundColor: '#00a65a', //Success (green)
                    borderColor: '#00a65a' //Success (green)
                }, {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'https://www.google.com/',
                    backgroundColor: '#3c8dbc', //Primary (light-blue)
                    borderColor: '#3c8dbc' //Primary (light-blue)
                }],
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!
                drop: function(info) {
                    // is the "remove after drop" checkbox checked?
                    if (checkbox.checked) {
                        // if so, remove the element from the "Draggable Events" list
                        info.draggedEl.parentNode.removeChild(info.draggedEl);
                    }
                }
            });

            calendar.render();
            // $('#calendar').fullCalendar()

            /* ADDING EVENTS */
            var currColor = '#3c8dbc' //Red by default
                // Color chooser button
            $('#color-chooser > li > a').click(function(e) {
                e.preventDefault()
                    // Save color
                currColor = $(this).css('color')
                    // Add color effect to button
                $('#add-new-event').css({
                    'background-color': currColor,
                    'border-color': currColor
                })
            })
            $('#add-new-event').click(function(e) {
                e.preventDefault()
                    // Get value and make sure it is not null
                var val = $('#new-event').val()
                if (val.length == 0) {
                    return
                }

                // Create events
                var event = $('<div />')
                event.css({
                    'background-color': currColor,
                    'border-color': currColor,
                    'color': '#fff'
                }).addClass('external-event')
                event.text(val)
                $('#external-events').prepend(event)

                // Add draggable funtionality
                ini_events(event)

                // Remove event from text input
                $('#new-event').val('')
            })
        })
    </script>
</body>

</html>
