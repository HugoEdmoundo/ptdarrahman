<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender Akademik | PTD Arrahman</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Glide JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/kalender-akademik.css') }}">
    <!-- Favicon -->
    <link rel="icon" href="https://res.cloudinary.com/dunynusuh/image/upload/v1755771459/Logo-Ar-Rahman_fm4mgg.png">
</head>
    
</head>
<body>
    @include('partials.header')
    @include('partials.cursor')
    <div class="academic-calendar">
        <div class="calendar-header">
            <h1>Kalender Akademik 2023/2024</h1>
            <p>Jadwal perkuliahan, ujian, dan kegiatan akademik penting untuk dua semester</p>
        </div>

        <div class="semester-tabs">
            <div class="semester-tab active" data-semester="ganjil">Semester Ganjil 2023/2024</div>
            <div class="semester-tab" data-semester="genap">Semester Genap 2023/2024</div>
        </div>

        <div class="calendar-container">
            <!-- Month Selector -->
            <div class="month-selector">
                <h2>Bulan Akademik</h2>
                <ul class="month-list" id="month-list">
                    <!-- Months will be populated by JavaScript -->
                </ul>

                <div class="calendar-legend">
                    <div class="legend-item">
                        <div class="legend-color academic"></div>
                        <span>Perkuliahan</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color exam"></div>
                        <span>Ujian</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color holiday"></div>
                        <span>Libur</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color other"></div>
                        <span>Lainnya</span>
                    </div>
                </div>
            </div>

            <!-- Calendar View -->
            <div class="calendar-view">
                <div class="calendar-controls">
                    <div class="current-month-display">Agustus 2023</div>
                    <div class="navigation-buttons">
                        <button class="nav-btn" id="prev-month">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="nav-btn" id="today-btn">
                            <i class="fas fa-calendar-day"></i>
                        </button>
                        <button class="nav-btn" id="next-month">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>

                <div class="weekdays">
                    <div class="weekday">Min</div>
                    <div class="weekday">Sen</div>
                    <div class="weekday">Sel</div>
                    <div class="weekday">Rab</div>
                    <div class="weekday">Kam</div>
                    <div class="weekday">Jum</div>
                    <div class="weekday">Sab</div>
                </div>

                <div class="days-grid" id="days-grid">
                    <!-- Days will be populated by JavaScript -->
                </div>
            </div>
        </div>

        <!-- Events Panel -->
        <div class="events-panel">
            <h2>Kegiatan Akademik <span id="current-month-events">Agustus 2023</span></h2>
            
            <div class="event-filters">
                <button class="filter-btn active" data-filter="all">Semua</button>
                <button class="filter-btn" data-filter="academic">Perkuliahan</button>
                <button class="filter-btn" data-filter="exam">Ujian</button>
                <button class="filter-btn" data-filter="holiday">Libur</button>
                <button class="filter-btn" data-filter="other">Lainnya</button>
            </div>
            
            <ul class="events-list" id="events-list">
                <!-- Events will be populated by JavaScript -->
            </ul>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Glide JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.min.js"></script>
    <!-- Fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!-- Waypoints -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <!-- Counter Up -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data akademik untuk dua semester
            const academicData = {
                ganjil: {
                    months: [
                        { name: "Agustus 2023", year: 2023, month: 7 },
                        { name: "September 2023", year: 2023, month: 8 },
                        { name: "Oktober 2023", year: 2023, month: 9 },
                        { name: "November 2023", year: 2023, month: 10 },
                        { name: "Desember 2023", year: 2023, month: 11 },
                        { name: "Januari 2024", year: 2024, month: 0 }
                    ],
                    events: [
                        { date: new Date(2023, 7, 14), title: 'Awal Perkuliahan Semester Ganjil', desc: 'Perkuliahan semester ganjil tahun akademik 2023/2024 dimulai.', type: 'academic' },
                        { date: new Date(2023, 7, 17), title: 'Hari Kemerdekaan RI', desc: 'Libur nasional memperingati Hari Kemerdekaan Republik Indonesia.', type: 'holiday' },
                        { date: new Date(2023, 7, 21), title: 'Pengenalan Kehidupan Kampus', desc: 'Kegiatan pengenalan kehidupan kampus bagi mahasiswa baru.', type: 'other' },
                        { date: new Date(2023, 7, 28), title: 'Ujian Tengah Semester', desc: 'Ujian tengah semester untuk seluruh mata kuliah.', type: 'exam', endDate: new Date(2023, 7, 30) },
                        { date: new Date(2023, 8, 1), title: 'Batas Akhir Pengubahan KRS', desc: 'Batas akhir untuk melakukan perubahan Kartu Rencana Studi.', type: 'academic' },
                        { date: new Date(2023, 8, 12), title: 'Seminar Proposal Skripsi', desc: 'Pendaftaran seminar proposal skripsi untuk mahasiswa tingkat akhir.', type: 'academic' },
                        { date: new Date(2023, 9, 5), title: 'Pekan Olahraga Mahasiswa', desc: 'Penyelenggaraan pekan olahraga tahunan antar fakultas.', type: 'other', endDate: new Date(2023, 9, 7) },
                        { date: new Date(2023, 10, 1), title: 'Pendaftaran Wisuda', desc: 'Batas akhir pendaftaran wisuda periode November.', type: 'academic' },
                        { date: new Date(2023, 10, 10), title: 'Ujian Akhir Semester', desc: 'Ujian akhir semester ganjil untuk seluruh mata kuliah.', type: 'exam', endDate: new Date(2023, 10, 22) },
                        { date: new Date(2023, 11, 1), title: 'Pengumuman Nilai', desc: 'Pengumuman nilai akhir semester ganjil.', type: 'academic' },
                        { date: new Date(2023, 11, 25), title: 'Libur Natal', desc: 'Libur semester ganjil dan perayaan Natal.', type: 'holiday', endDate: new Date(2024, 0, 1) },
                        { date: new Date(2024, 0, 2), title: 'Awal Perkuliahan Semester Genap', desc: 'Perkuliahan semester genap tahun akademik 2023/2024 dimulai.', type: 'academic' }
                    ]
                },
                genap: {
                    months: [
                        { name: "Februari 2024", year: 2024, month: 1 },
                        { name: "Maret 2024", year: 2024, month: 2 },
                        { name: "April 2024", year: 2024, month: 3 },
                        { name: "Mei 2024", year: 2024, month: 4 },
                        { name: "Juni 2024", year: 2024, month: 5 },
                        { name: "Juli 2024", year: 2024, month: 6 }
                    ],
                    events: [
                        { date: new Date(2024, 1, 5), title: 'Awal Perkuliahan Semester Genap', desc: 'Perkuliahan semester genap tahun akademik 2023/2024 dimulai.', type: 'academic' },
                        { date: new Date(2024, 2, 11), title: 'Ujian Tengah Semester', desc: 'Ujian tengah semester untuk seluruh mata kuliah.', type: 'exam', endDate: new Date(2024, 2, 16) },
                        { date: new Date(2024, 2, 29), title: 'Batas Akhir Pengubahan KRS', desc: 'Batas akhir untuk melakukan perubahan Kartu Rencana Studi.', type: 'academic' },
                        { date: new Date(2024, 3, 1), title: 'Seminar Hasil Penelitian', desc: 'Presentasi hasil penelitian untuk mahasiswa tingkat akhir.', type: 'academic' },
                        { date: new Date(2024, 3, 12), title: 'Porseni Mahasiswa', desc: 'Pekan seni mahasiswa antar jurusan.', type: 'other', endDate: new Date(2024, 3, 14) },
                        { date: new Date(2024, 4, 1), title: 'Hari Buruh Internasional', desc: 'Libur nasional Hari Buruh Internasional.', type: 'holiday' },
                        { date: new Date(2024, 4, 10), title: 'Pendaftaran Wisuda', desc: 'Batas akhir pendaftaran wisuda periode Juni.', type: 'academic' },
                        { date: new Date(2024, 4, 20), title: 'Ujian Akhir Semester', desc: 'Ujian akhir semester genap untuk seluruh mata kuliah.', type: 'exam', endDate: new Date(2024, 4, 31) },
                        { date: new Date(2024, 5, 1), title: 'Pengumuman Nilai', desc: 'Pengumuman nilai akhir semester genap.', type: 'academic' },
                        { date: new Date(2024, 5, 15), title: 'Yudisium', desc: 'Acara yudisium untuk mahasiswa yang telah menyelesaikan studi.', type: 'academic' },
                        { date: new Date(2024, 5, 25), title: 'Wisuda', desc: 'Wisuda periode Juni tahun 2024.', type: 'academic' },
                        { date: new Date(2024, 6, 1), title: 'Libur Semester Genap', desc: 'Awal libur panjang semester genap.', type: 'holiday' }
                    ]
                }
            };

            // Initialize calendar
            let currentSemester = 'ganjil';
            let currentMonth = new Date().getMonth();
            let currentYear = new Date().getFullYear();
            let activeFilter = 'all';

            // Set current semester based on current date
            if ((currentMonth >= 0 && currentMonth <= 5) || (currentMonth === 6 && currentYear === 2024)) {
                currentSemester = 'genap';
            }

            // Initialize calendar
            initCalendar();

            // Semester tabs functionality
            const semesterTabs = document.querySelectorAll('.semester-tab');
            semesterTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    semesterTabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    
                    currentSemester = this.getAttribute('data-semester');
                    initCalendar();
                });
            });

            // Navigation buttons
            document.getElementById('prev-month').addEventListener('click', function() {
                navigateMonth(-1);
            });
            
            document.getElementById('next-month').addEventListener('click', function() {
                navigateMonth(1);
            });
            
            document.getElementById('today-btn').addEventListener('click', function() {
                goToToday();
            });

            // Filter buttons
            const filterBtns = document.querySelectorAll('.filter-btn');
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    
                    activeFilter = this.getAttribute('data-filter');
                    renderEvents(currentMonth, currentYear);
                });
            });

            // Function to initialize calendar
            function initCalendar() {
                renderMonthSelector();
                
                // Set to first month of semester or current month if in this semester
                const today = new Date();
                const currentDateInSemester = academicData[currentSemester].months.some(m => 
                    m.year === today.getFullYear() && m.month === today.getMonth()
                );
                
                if (currentDateInSemester) {
                    currentMonth = today.getMonth();
                    currentYear = today.getFullYear();
                } else {
                    currentMonth = academicData[currentSemester].months[0].month;
                    currentYear = academicData[currentSemester].months[0].year;
                }
                
                renderCalendar(currentMonth, currentYear);
                renderEvents(currentMonth, currentYear);
                updateActiveMonth();
            }

            // Function to render month selector
            function renderMonthSelector() {
                const monthList = document.getElementById('month-list');
                monthList.innerHTML = '';
                
                academicData[currentSemester].months.forEach(monthData => {
                    const monthItem = document.createElement('li');
                    monthItem.className = 'month-item';
                    monthItem.setAttribute('data-month', monthData.month);
                    monthItem.setAttribute('data-year', monthData.year);
                    
                    // Count events for this month
                    const eventCount = academicData[currentSemester].events.filter(event => {
                        return event.date.getMonth() === monthData.month && 
                               event.date.getFullYear() === monthData.year;
                    }).length;
                    
                    monthItem.innerHTML = `
                        <span class="month-name">${monthData.name}</span>
                        <span class="month-events-count">${eventCount}</span>
                    `;
                    
                    monthItem.addEventListener('click', function() {
                        document.querySelectorAll('.month-item').forEach(item => {
                            item.classList.remove('active');
                        });
                        this.classList.add('active');
                        
                        currentMonth = parseInt(this.getAttribute('data-month'));
                        currentYear = parseInt(this.getAttribute('data-year'));
                        renderCalendar(currentMonth, currentYear);
                        renderEvents(currentMonth, currentYear);
                    });
                    
                    monthList.appendChild(monthItem);
                });
            }

            // Function to update active month in selector
            function updateActiveMonth() {
                document.querySelectorAll('.month-item').forEach(item => {
                    const month = parseInt(item.getAttribute('data-month'));
                    const year = parseInt(item.getAttribute('data-year'));
                    
                    if (month === currentMonth && year === currentYear) {
                        item.classList.add('active');
                    } else {
                        item.classList.remove('active');
                    }
                });
            }

            // Function to render calendar
            function renderCalendar(month, year) {
                const daysGrid = document.getElementById('days-grid');
                daysGrid.innerHTML = '';
                
                // Update current month display
                const monthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                                   'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                document.querySelector('.current-month-display').textContent = `${monthNames[month]} ${year}`;
                document.getElementById('current-month-events').textContent = `${monthNames[month]} ${year}`;
                
                // Get first day of month and number of days in month
                const firstDay = new Date(year, month, 1).getDay();
                const daysInMonth = new Date(year, month + 1, 0).getDate();
                
                // Create day elements for previous month
                const daysInPrevMonth = new Date(year, month, 0).getDate();
                for (let i = 0; i < firstDay; i++) {
                    const day = document.createElement('div');
                    day.className = 'day other-month';
                    day.innerHTML = `<div class="day-number">${daysInPrevMonth - firstDay + i + 1}</div>`;
                    daysGrid.appendChild(day);
                }
                
                // Create day elements for current month
                const today = new Date();
                const currentEvents = academicData[currentSemester].events;
                
                for (let i = 1; i <= daysInMonth; i++) {
                    const day = document.createElement('div');
                    day.className = 'day';
                    day.setAttribute('data-day', i);
                    day.setAttribute('data-month', month);
                    day.setAttribute('data-year', year);
                    
                    // Check if today
                    if (i === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
                        day.classList.add('today');
                    }
                    
                    // Add day number
                    day.innerHTML = `<div class="day-number">${i}</div>`;
                    
                    // Check events for this day
                    const dayEvents = currentEvents.filter(event => {
                        const eventDate = event.date;
                        return eventDate.getDate() === i && 
                               eventDate.getMonth() === month && 
                               eventDate.getFullYear() === year;
                    });
                    
                    // Add event indicators
                    if (dayEvents.length > 0) {
                        day.classList.add('has-event');
                        
                        const eventIndicators = document.createElement('div');
                        eventIndicators.className = 'event-indicators';
                        
                        // Get unique event types for this day
                        const eventTypes = [...new Set(dayEvents.map(event => event.type))];
                        
                        eventTypes.forEach(type => {
                            const indicator = document.createElement('div');
                            indicator.className = `event-indicator ${type}`;
                            indicator.setAttribute('data-type', type);
                            eventIndicators.appendChild(indicator);
                        });
                        
                        day.appendChild(eventIndicators);
                        
                        // Add click event to show events for this day
                        day.addEventListener('click', function() {
                            const day = parseInt(this.getAttribute('data-day'));
                            const month = parseInt(this.getAttribute('data-month'));
                            const year = parseInt(this.getAttribute('data-year'));
                            
                            renderEvents(month, year, day);
                        });
                    }
                    
                    daysGrid.appendChild(day);
                }
                
                // Calculate how many next month days to show
                const totalCells = 42; // 6 rows x 7 columns
                const remainingCells = totalCells - (firstDay + daysInMonth);
                
                // Create day elements for next month
                for (let i = 1; i <= remainingCells; i++) {
                    const day = document.createElement('div');
                    day.className = 'day other-month';
                    day.innerHTML = `<div class="day-number">${i}</div>`;
                    daysGrid.appendChild(day);
                }
                
                // Update active month in selector
                updateActiveMonth();
            }

            // Function to render events
            function renderEvents(month, year, day = null) {
                const eventsList = document.getElementById('events-list');
                eventsList.innerHTML = '';
                
                const currentEvents = academicData[currentSemester].events.filter(event => {
                    const eventDate = event.date;
                    const matchesMonthYear = eventDate.getMonth() === month && eventDate.getFullYear() === year;
                    const matchesDay = day ? eventDate.getDate() === day : true;
                    const matchesFilter = activeFilter === 'all' || event.type === activeFilter;
                    
                    return matchesMonthYear && matchesDay && matchesFilter;
                });
                
                // Sort events by date
                currentEvents.sort((a, b) => a.date - b.date);
                
                if (currentEvents.length === 0) {
                    eventsList.innerHTML = `
                        <div class="no-events">
                            <i class="far fa-calendar-times fa-3x"></i>
                            <p>Tidak ada kegiatan yang dijadwalkan</p>
                        </div>
                    `;
                    return;
                }
                
                currentEvents.forEach(event => {
                    const eventDate = event.date;
                    const monthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                                      'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    
                    let dateString = `${eventDate.getDate()} ${monthNames[eventDate.getMonth()]} ${eventDate.getFullYear()}`;
                    
                    // If event has end date, show range
                    if (event.endDate) {
                        const endDate = event.endDate;
                        if (eventDate.getMonth() === endDate.getMonth()) {
                            dateString = `${eventDate.getDate()}-${endDate.getDate()} ${monthNames[eventDate.getMonth()]} ${eventDate.getFullYear()}`;
                        } else {
                            dateString = `${eventDate.getDate()} ${monthNames[eventDate.getMonth()]} - ${endDate.getDate()} ${monthNames[endDate.getMonth()]} ${endDate.getFullYear()}`;
                        }
                    }
                    
                    const eventItem = document.createElement('li');
                    eventItem.className = `event-item fade-in ${event.important ? 'important' : ''} ${event.critical ? 'critical' : ''}`;
                    
                    eventItem.innerHTML = `
                        <div class="event-date">
                            <i class="far fa-calendar-alt"></i>
                            ${dateString}
                        </div>
                        <h3 class="event-title">${event.title}</h3>
                        <p class="event-desc">${event.desc}</p>
                        <span class="event-type ${event.type}">${getEventTypeName(event.type)}</span>
                    `;
                    
                    eventsList.appendChild(eventItem);
                });
            }

            // Function to get event type name
            function getEventTypeName(type) {
                switch(type) {
                    case 'academic': return 'Perkuliahan';
                    case 'exam': return 'Ujian';
                    case 'holiday': return 'Libur';
                    case 'other': return 'Lainnya';
                    default: return type;
                }
            }

            // Function to navigate to previous/next month
            function navigateMonth(direction) {
                // Find current month index in semester
                const months = academicData[currentSemester].months;
                let currentIndex = months.findIndex(m => m.month === currentMonth && m.year === currentYear);
                
                if (currentIndex !== -1) {
                    currentIndex += direction;
                    
                    // Check if we need to switch semester
                    if (currentIndex < 0 || currentIndex >= months.length) {
                        // Switch semester
                        currentSemester = currentSemester === 'ganjil' ? 'genap' : 'ganjil';
                        document.querySelectorAll('.semester-tab').forEach(tab => {
                            tab.classList.remove('active');
                            if (tab.getAttribute('data-semester') === currentSemester) {
                                tab.classList.add('active');
                            }
                        });
                        
                        // Set to first or last month of new semester
                        currentIndex = direction === 1 ? 0 : academicData[currentSemester].months.length - 1;
                    }
                    
                    const newMonth = academicData[currentSemester].months[currentIndex];
                    currentMonth = newMonth.month;
                    currentYear = newMonth.year;
                    
                    renderCalendar(currentMonth, currentYear);
                    renderEvents(currentMonth, currentYear);
                }
            }

            // Function to go to today
            function goToToday() {
                const today = new Date();
                currentMonth = today.getMonth();
                currentYear = today.getFullYear();
                
                // Check if today is in current semester, if not switch semester
                const inGanjil = academicData.ganjil.months.some(m => m.year === currentYear && m.month === currentMonth);
                const inGenap = academicData.genap.months.some(m => m.year === currentYear && m.month === currentMonth);
                
                if (inGanjil && currentSemester !== 'ganjil') {
                    currentSemester = 'ganjil';
                    document.querySelectorAll('.semester-tab').forEach(tab => {
                        tab.classList.remove('active');
                        if (tab.getAttribute('data-semester') === 'ganjil') {
                            tab.classList.add('active');
                        }
                    });
                } else if (inGenap && currentSemester !== 'genap') {
                    currentSemester = 'genap';
                    document.querySelectorAll('.semester-tab').forEach(tab => {
                        tab.classList.remove('active');
                        if (tab.getAttribute('data-semester') === 'genap') {
                            tab.classList.add('active');
                        }
                    });
                }
                
                renderCalendar(currentMonth, currentYear);
                renderEvents(currentMonth, currentYear);
                renderMonthSelector();
            }
        });
    </script>
</body>
</html>