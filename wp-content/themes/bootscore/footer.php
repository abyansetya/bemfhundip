<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.2.0.0
 */

?>

<footer>

  <div class="bootscore-info text-white" style="background: #171123;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h5 class="my-4" style="color: #D75A5A;">KABINET AKSATA KIRANA</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <p>Alamat Sekretariat BEM</p>

          <div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=Gedung%20PKM%20Fakultas%20Hukum&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:200px;width:300px;}</style><a href="https://www.embedgooglemap.net">insert google map into wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:300px;}</style></div></div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12 px-4">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
              <p class="fw-bold">MENU</p>

              <a class="text-white" style="text-decoration: none;" href="https://bem.fh.undip.ac.id/?page_id=77">Profil</a><br>
              <a class="text-white" style="text-decoration: none;" href="https://bem.fh.undip.ac.id/?page_id=76">Informasi</a><br>
              <a class="text-white" style="text-decoration: none;" href="https://bem.fh.undip.ac.id/?page_id=11">Eksternal</a>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
              <p class="fw-bold">PRODUK KAMI</p>

              <a class="text-white" style="text-decoration: none;" href="https://bem.fh.undip.ac.id/?page_id=15">Artikel</a><br>
              <a class="text-white" style="text-decoration: none;" href="https://bem.fh.undip.ac.id/?page_id=14">Kajian</a><br>
              <a class="text-white" style="text-decoration: none;" href="https://bem.fh.undip.ac.id/?page_id=16">Merchandise</a>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
              <p class="fw-bold">EKSTERNAL</p>

              <a class="text-white" style="text-decoration: none;" href="#">Media Partner</a>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-lg-6 col-md-12 col-sm-12">
              <p class="fw-bold">KONTAK</p>

              <span>bemfhundip2024@gmail.com</span>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <p class="fw-bold">MEDIA SOSIAL</p>

              <a href="https://page.line.me/whl3810k " target="_blank" class="text-white me-3">
                <i class="fa-brands fa-line fs-2"></i>
              </a>
              <a href="https://youtube.com/c/OFFICIALBEMFHUNDIP" target="_blank" class="text-white me-3">
                <i class="fa-brands fa-youtube fs-2"></i>
              </a>
              <a href="https://www.linkedin.com/company/bemfhundip/" target="_blank" class="text-white me-3">
                <i class="fa-brands fa-linkedin fs-2"></i>
              </a>
              <a href="https://instagram.com/bemfhundip?igshid=YmMyMTA2M2Y=" target="_blank" class="text-white me-3">
                <i class="fa-brands fa-instagram fs-2"></i>
              </a>
			  <a href="https://www.tiktok.com/@bemfhundip?lang=en" target="_blank" class="text-white me-3">
                <i class="fa-brands fa-tiktok fs-3"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 mb-4 mt-3">
			<p>Made With Love <i class="fa-solid fa-heart" style="color: #FE5979"></i> By Kantor Media & Informasi</p>
			
          	<small>Copyright &copy;&nbsp;<?php echo Date('Y'); ?> All Rights Reserved | BEM FH UNDIP 2024</small>
        </div>
      </div>
    </div>
  </div>

</footer>

<!-- To top button -->
<a href="#" class="btn btn-primary shadow top-button position-fixed zi-1020"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
  $('.listinformasi').slick({
    centerMode: true,
    centerPadding: '60px',
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.listkajian').slick({
    // arrows: true,
    prevArrow: "<button type='button' class='custom-arrow-left pull-left'><i class='fa-solid fa-chevron-left text-success fw-bolder fs-3'></i></button>",
    nextArrow: "<button type='button' class='custom-arrow-right pull-right'><i class='fa-solid fa-chevron-right text-success fw-bolder fs-3'></i></button>",
    dots: true,
    centerMode: true,
    centerPadding: '50px',
    slidesToShow: 4,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ],
  });

  $('.listartikel').slick({
    // arrows: true,
    prevArrow: "<button type='button' class='custom-arrow-left pull-left'><i class='fa-solid fa-chevron-left text-success fw-bolder fs-3'></i></button>",
    nextArrow: "<button type='button' class='custom-arrow-right pull-right'><i class='fa-solid fa-chevron-right text-success fw-bolder fs-3'></i></button>",
    dots: true,
    centerMode: true,
    centerPadding: '40px',
    slidesToShow: 4,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ],
  });

  $('.listinformasiterbaru').slick({
    prevArrow: "<button type='button' class='custom-arrow-left pull-left'><i class='fa-solid fa-chevron-left text-white fw-bolder fs-3'></i></button>",
    nextArrow: "<button type='button' class='custom-arrow-right pull-right'><i class='fa-solid fa-chevron-right text-white fw-bolder fs-3'></i></button>",
    dots: true,
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ],
  });
	
	
	
	$('.listkemahasiswaan').slick({
    // arrows: true,
    prevArrow: "<button type='button' class='custom-arrow-left pull-left'><i class='fa-solid fa-chevron-left text-success fw-bolder fs-3'></i></button>",
    nextArrow: "<button type='button' class='custom-arrow-right pull-right'><i class='fa-solid fa-chevron-right text-success fw-bolder fs-3'></i></button>",
    dots: true,
    centerMode: true,
    centerPadding: '50px',
    slidesToShow: 4,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ],
  });

  $('.listkapro').slick({
    // arrows: true,
    prevArrow: "<button type='button' class='custom-arrow-left pull-left'><i class='fa-solid fa-chevron-left text-success fw-bolder fs-3'></i></button>",
    nextArrow: "<button type='button' class='custom-arrow-right pull-right'><i class='fa-solid fa-chevron-right text-success fw-bolder fs-3'></i></button>",
    dots: true,
    centerMode: true,
    centerPadding: '50px',
    slidesToShow: 4,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ],
  });

  $('.listbeasiswa').slick({
    // arrows: true,
    prevArrow: "<button type='button' class='custom-arrow-left pull-left'><i class='fa-solid fa-chevron-left text-success fw-bolder fs-3'></i></button>",
    nextArrow: "<button type='button' class='custom-arrow-right pull-right'><i class='fa-solid fa-chevron-right text-success fw-bolder fs-3'></i></button>",
    dots: true,
    centerMode: true,
    centerPadding: '50px',
    slidesToShow: 4,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ],
  });

  $('.listprodukhukum').slick({
    // arrows: true,
    prevArrow: "<button type='button' class='custom-arrow-left pull-left'><i class='fa-solid fa-chevron-left text-success fw-bolder fs-3'></i></button>",
    nextArrow: "<button type='button' class='custom-arrow-right pull-right'><i class='fa-solid fa-chevron-right text-success fw-bolder fs-3'></i></button>",
    dots: true,
    centerMode: true,
    centerPadding: '50px',
    slidesToShow: 4,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ],
  });

  $('.listadministrasi').slick({
    // arrows: true,
    prevArrow: "<button type='button' class='custom-arrow-left pull-left'><i class='fa-solid fa-chevron-left text-success fw-bolder fs-3'></i></button>",
    nextArrow: "<button type='button' class='custom-arrow-right pull-right'><i class='fa-solid fa-chevron-right text-success fw-bolder fs-3'></i></button>",
    dots: true,
    centerMode: true,
    centerPadding: '50px',
    slidesToShow: 4,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ],
  });
</script>

<script>
  $(document).ready(function(){
      var date = new Date();
      var today = date.getDate();
      // Set click handlers for DOM elements
      $(".right-button").click({date: date}, next_year);
      $(".left-button").click({date: date}, prev_year);
      $(".month").click({date: date}, month_click);
      $("#add-button").click({date: date}, new_event);
      // Set current month as active
      $(".months-row").children().eq(date.getMonth()).addClass("active-month");
      init_calendar(date);
      var events = check_events(today, date.getMonth()+1, date.getFullYear());
      show_events(events, months[date.getMonth()], today);
  });

  // Initialize the calendar by appending the HTML dates
  function init_calendar(date) {
      $(".tbody").empty();
      $(".events-container").empty();
      var calendar_days = $(".tbody");
      var month = date.getMonth();
      var year = date.getFullYear();
      var day_count = days_in_month(month, year);
      var row = $("<tr class='table-row'></tr>");
      var today = date.getDate();
      // Set date to 1 to find the first day of the month
      date.setDate(1);
      var first_day = date.getDay();
      // 35+firstDay is the number of date elements to be added to the dates table
      // 35 is from (7 days in a week) * (up to 5 rows of dates in a month)
      for(var i=0; i<35+first_day; i++) {
          // Since some of the elements will be blank,
          // need to calculate actual date from index
          var day = i-first_day+1;
          // If it is a sunday, make a new row
          if(i%7===0) {
              calendar_days.append(row);
              row = $("<tr class='table-row'></tr>");
          }
          // if current index isn't a day in this month, make it blank
          if(i < first_day || day > day_count) {
              var curr_date = $("<td class='table-date nil'>"+"</td>");
              row.append(curr_date);
          }
          else {
              var curr_date = $("<td class='table-date'>"+day+"</td>");
              var events = check_events(day, month+1, year);
              if(today===day && $(".active-date").length===0) {
                  curr_date.addClass("active-date");
                  show_events(events, months[month], day);
              }
              // If this date has any events, style it with .event-date
              if(events.length!==0) {
                  curr_date.addClass("event-date");
              }
              // Set onClick handler for clicking a date
              curr_date.click({events: events, month: months[month], day:day}, date_click);
              row.append(curr_date);
          }
      }
      // Append the last row and set the current year
      calendar_days.append(row);
      $(".year").text(year);
  }

  // Get the number of days in a given month/year
  function days_in_month(month, year) {
      var monthStart = new Date(year, month, 1);
      var monthEnd = new Date(year, month + 1, 1);
      return (monthEnd - monthStart) / (1000 * 60 * 60 * 24);
  }

  // Event handler for when a date is clicked
  function date_click(event) {
      $(".events-container").show(250);
      $("#dialog").hide(250);
      $(".active-date").removeClass("active-date");
      $(this).addClass("active-date");
      show_events(event.data.events, event.data.month, event.data.day);
  };

  // Event handler for when a month is clicked
  function month_click(event) {
      $(".events-container").show(250);
      $("#dialog").hide(250);
      var date = event.data.date;
      $(".active-month").removeClass("active-month");
      $(this).addClass("active-month");
      var new_month = $(".month").index(this);
      date.setMonth(new_month);
      init_calendar(date);
  }

  // Event handler for when the year right-button is clicked
  function next_year(event) {
      $("#dialog").hide(250);
      var date = event.data.date;
      var new_year = date.getFullYear()+1;
      $("year").html(new_year);
      date.setFullYear(new_year);
      init_calendar(date);
  }

  // Event handler for when the year left-button is clicked
  function prev_year(event) {
      $("#dialog").hide(250);
      var date = event.data.date;
      var new_year = date.getFullYear()-1;
      $("year").html(new_year);
      date.setFullYear(new_year);
      init_calendar(date);
  }

  // Event handler for clicking the new event button
  function new_event(event) {
      // if a date isn't selected then do nothing
      if($(".active-date").length===0)
          return;
      // remove red error input on click
      $("input").click(function(){
          $(this).removeClass("error-input");
      })
      // empty inputs and hide events
      $("#dialog input[type=text]").val('');
      $("#dialog input[type=number]").val('');
      $(".events-container").hide(250);
      $("#dialog").show(250);
      // Event handler for cancel button
      $("#cancel-button").click(function() {
          $("#name").removeClass("error-input");
          $("#count").removeClass("error-input");
          $("#dialog").hide(250);
          $(".events-container").show(250);
      });
      // Event handler for ok button
      $("#ok-button").unbind().click({date: event.data.date}, function() {
          var date = event.data.date;
          var name = $("#name").val().trim();
          var count = parseInt($("#count").val().trim());
          var day = parseInt($(".active-date").html());
          // Basic form validation
          if(name.length === 0) {
              $("#name").addClass("error-input");
          }
          else if(isNaN(count)) {
              $("#count").addClass("error-input");
          }
          else {
              $("#dialog").hide(250);
              console.log("new event");
              new_event_json(name, count, date, day);
              date.setDate(day);
              init_calendar(date);
          }
      });
  }

  // Adds a json event to event_data
  function new_event_json(name, count, date, day) {
      var event = {
          "occasion": name,
          "invited_count": count,
          "year": date.getFullYear(),
          "month": date.getMonth()+1,
          "day": day
      };
      event_data["events"].push(event);
  }

  // Display all events of the selected date in card views
  function show_events(events, month, day) {
      // Clear the dates container
      $(".events-container").empty();
      $(".events-container").show(250);
      // console.log(event_data["events"]);
      // If there are no events for this date, notify the user
      if(events.length===0) {
          var event_card = $("<div class='card rounded-4 border-0 mb-3'></div>");
          var event_body = $("<div class='card-body text-start'></div>");
          var event_head = $("<h6 class='text-orange'>"+day+" "+month+"</h6>");
          var event_name = $("<div class='event-name'>Tidak ada event untuk "+day+" "+month+".</div>");
          $(event_card).append(event_body);
          $(event_body).append(event_head);
          $(event_body).append(event_name);
          $(".events-container").append(event_card);
      }
      else {
          // Go through and add each event as a card to the events container
          for(var i=0; i<events.length; i++) {
              var event_card = $("<div class='card rounded-4 border-0 mb-3'></div>");
              var event_body = $("<div class='card-body text-start'></div>");
              var event_head = $("<h6 class='text-success'>"+day+" "+month+"</h6>");
              var event_name = $("<div class='event-name'>"+events[i]["occasion"]+".</div>");
              $(event_card).append(event_body);
              $(event_body).append(event_head);
              $(event_body).append(event_name);
              $(".events-container").append(event_card);
          }
      }
  }

  // Checks if a specific date has any events
  function check_events(day, month, year) {
      var events = [];
      for(var i=0; i<event_data["events"].length; i++) {
          var event = event_data["events"][i];
          if(event["day"]===day &&
              event["month"]===month &&
              event["year"]===year) {
                  events.push(event);
              }
      }
      return events;
  }

  // Given data for events in JSON format
  var event_data = {
      "events": [
        {
            "occasion": "Terbit E-Zine HOPE Volume 3 Part 3",
            "invited_count": 0,
            "year": 2022,
            "month": 8,
            "day": 4,
            "cancelled": false
        },
        {
            "occasion": "Perkenalan Kehidupan Kampus Mahasiswa Baru Tahun 2022",
            "invited_count": 0,
            "year": 2022,
            "month": 8,
            "day": 15,
            "cancelled": false
        },
        {
            "occasion": "Hari Kemerdekaan Indonesia Ke-77",
            "invited_count": 0,
            "year": 2022,
            "month": 8,
            "day": 17,
            "cancelled": false
        },
        {
            "occasion": "Terbit Warta BEM 2022",
            "invited_count": 0,
            "year": 2022,
            "month": 8,
            "day": 17,
            "cancelled": false
        },
        {
            "occasion": "Awal Masuk Perkuliahan Semester Gasal",
            "invited_count": 0,
            "year": 2022,
            "month": 8,
            "day": 22
        }, 
		{
            "occasion": "Open Recruitment Panitia Jilid II DLF 2022",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 1
        },
		{
            "occasion": "M2O BEM FH UNDIP X BEM FEB UNDIP",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 2
        },
		{
            "occasion": "Open Recruitment Panitia Public Speaking Class 2022",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 2
        },
		  {
            "occasion": "Research School 1",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 3
        },
		  {
            "occasion": "Close Recruitment Panitia Public Speaking Class 2022",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 8
        },
		  {
            "occasion": "Kunjungan Kerja Gema Keadilan",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 10
        },
		  {
            "occasion": "Close Recruitment Panitia Jilid II DLF 2022",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 15
        },
		  {
            "occasion": "KSBA: Webinar Budaya",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 17
        },
		  {
            "occasion": "KSBA: Media Class",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 24
        },
		  {
            "occasion": "KSHI: Kurma",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 24
        },
		  {
            "occasion": "Day 1 Kelas Rakyat",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 24
        },
		  {
            "occasion": "Day 2 Kelas Rakyat",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 25
        },
		  {
            "occasion": "KDKS: Mondus 4",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 25
        },
		  {
            "occasion": "KDKS: Obor",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 10
        },
		  {
            "occasion": "LKMM-PD",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 10
        },
		  {
            "occasion": "LKMM-PD",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 11
        },
		  {
            "occasion": "M2O BEM FH UNDIP X BEM FH UNPAD",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 15
        },
		  {
            "occasion": "Mentoring Class 3 LAWYER",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 16
        },
		  {
            "occasion": "PSM SDG: Make Up Class",
            "invited_count": 0,
            "year": 2022,
            "month": 9,
            "day": 17
        },
		  {
            "occasion": "KSBA: Webinar Budaya",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 1
        },
		  {
            "occasion": "Dekan Cup",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 1
        },
		  {
            "occasion": "Dekan Cup",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 2
        },
		  {
            "occasion": "Pseudo: Oprec Observers of Philip C. Jessup 2023",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 3
        },
		  {
            "occasion": "Pseudo: Kajian Litigasi",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 5
        },
		  {
            "occasion": "FH Summit x Forkesma",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 7
        },
		  {
            "occasion": "Dekan Cup",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 7
        },
		  {
            "occasion": "Dekan Cup",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 8
        },
		  {
            "occasion": "Pseudo: Kajian Litigasi",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 12
        },
		  {
            "occasion": "Closing Ceremony Dekan Cup",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 15
        },
		  {
            "occasion": "Pseudo: Essay Deadline for Observers of Philip C. Jessup 2023",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 16
        },
		  {
            "occasion": "Pseudo: Meet Disscussion for Observers of Philip C. Jessup 2023",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 16
        },
		  {
            "occasion": "Pseudo: Kajian Litigasi",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 19
        },
		  {
            "occasion": "Alumni Gathering Episode 3",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 22
        },
		  {
            "occasion": "Hubungan Untuk Langsung ke Rakyat (HULK)",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 22
        },
		  {
            "occasion": "KSBA Square",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 22
        },
		  {
            "occasion": "Pseudo: Kajian Litigasi",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 26
        },
		  {
            "occasion": "Pseudo: Pengumpulan Berkas IMOOT 2022",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 27
        },
		  {
            "occasion": "Pseudo: Batas Pengumpulan Berkas IMOOT 2022",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 30
        },
		  {
            "occasion": "Pra Acara Training Legislatif FH",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 29
        },
		  {
            "occasion": "Company Visit: PT. Nissin Biscuit Indonesia",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 5
        },
		  {
            "occasion": "KSBA: French Class",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 29
        },
		  {
            "occasion": "KSBA: French Class",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 30
        },
		  {
            "occasion": "Penerbitan E-Zine Hope Vol 4 Part 1",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 1
        },
		   {
            "occasion": "Penerbitan E-Zine Hope Vol 4 Part 2",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 15
        },
		   {
            "occasion": "Penerbitan E-Zine Hope Vol 4 Part 3",
            "invited_count": 0,
            "year": 2022,
            "month": 10,
            "day": 29
        },
		   {
            "occasion": "Penerbitan E-Zine Hope Vol 4 Part 4",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 12
        },
		   {
            "occasion": "Penerbitan E-Zine Hope Vol 4 Part 5",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 26
        },
		   {
            "occasion": "Penerbitan E-Zine Hope Vol 4 Part 6",
            "invited_count": 0,
            "year": 2022,
            "month": 12,
            "day": 10
        },
		   {
            "occasion": "ALSA English Festival",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 3
        },
		   {
            "occasion": "ALSA English Festival",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 4
        },
		   {
            "occasion": "ALSA English Festival",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 5
        },
		   {
            "occasion": "ALSA English Festival",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 6
        },
		   {
            "occasion": "KRD: Public Speaking Class",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 5
        },
		   {
            "occasion": "KSBA: Webinar Hukum",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 5
        },
		   {
            "occasion": "Gema Keadilan: In House Training",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 5
        },
		  {
            "occasion": "Gema Keadilan: In House Training",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 6
        },
		  {
            "occasion": "Riskel: Sekolah Mawapres",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 5
        },
		   {
            "occasion": "Riskel: Sekolah Mawapres",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 6
        },
		   {
            "occasion": "Pekan Progresif 2022",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 7
        },
		   {
            "occasion": "Pekan Progresif 2022",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 8
        },
		   {
            "occasion": "Pekan Progresif 2022",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 9
        },
		   {
            "occasion": "Pekan Progresif 2022",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 10
        },
		   {
            "occasion": "Pekan Progresif 2022",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 11
        },
		   {
            "occasion": "Pekan Progresif 2022",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 12
        },
		   {
            "occasion": "ALSA: Diskusi Informal II",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 10
        },
		   {
            "occasion": "Themis: Pentas Akhir Tahun",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 12
        },
		   {
            "occasion": "Gema Keadilan: Ngobrol Pintar",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 12
        },
		   {
            "occasion": "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 12
        },
		   {
            "occasion": "Riskel: Kelas Menulis",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 19
        },
		   {
            "occasion": "PP: 16 HAKtP",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 25
        },
		   {
            "occasion": "Gema Keadilan: Audiensi Pers Nasional",
            "invited_count": 0,
            "year": 2022,
            "month": 11,
            "day": 26
        },
		  {
            "occasion": "Penerbitan E-Zine Shine Vol 2",
            "invited_count": 0,
            "year": 2023,
            "month": 4,
            "day": 30
        },
		   {
            "occasion": "Savoir De College",
            "invited_count": 0,
            "year": 2023,
            "month": 4,
            "day": 8
        },
		  {
            "occasion": "Savoir De College",
            "invited_count": 0,
            "year": 2023,
            "month": 4,
            "day": 9
        },
		  {
            "occasion": "KKIXKSHI: Perlombaan",
            "invited_count": 0,
            "year": 2023,
            "month": 4,
            "day": 12
        },
		  {
            "occasion": "Nebula: Oprec Anggota Baru Nebula Indonesia 2023",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 7
        },
		    {
            "occasion": "Ekotif: Open Submission PVM",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 7
        },
		  {
            "occasion": "ALSA: Alsa Internal Competition Class",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 6
        },
		  {
            "occasion": "RISKEL: Lingkar Riset",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 6
        },
      {
            "occasion" : "PRMK: Upgrading",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 6
        },
		  {
            "occasion" : "ALSA: Earth Day",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 6
        },
		  {
            "occasion" : "PMK: KKR Paskah PMK FH Undip",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 6
        },
		  
		  {
            "occasion" : "KRD: Alumni Talk",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 7
        },
		  {
            "occasion" : "PSEUDO: Pemilihan PO Pseudo Visit",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 11
        },
		  
		  {
            "occasion" : "KRD: Talk Over Legal Debate Vol.VII",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 12
        },
		  
		   {
            "occasion" : "KKI: Training of Ormentor",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 13
        },
		  {
            "occasion" : "KKI: MASUKI",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 12
        },
		  {
            "occasion" : "KDKS: Bakti Sosial",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 13
        },
		  {
            "occasion" : "Ekotif: Mentoring Class I",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 12
        },
		  {
            "occasion" : "ALSA: ALSA Training",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 13
        },
		  {
            "occasion" : "HSP: Progressive Talks 1",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 13
        },
		  {
            "occasion" : "KSBA: Fusion",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 13
        },
		  {
            "occasion" : "PMK: Olahraga Bersama",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 13
        },
		  {
            "occasion" : "PSDM: Grand Opening LKMM-D",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 13
        },
		  {
            "occasion" : "PSDM: Pre-Phase LKMM-D",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 14
        },
		  {
            "occasion" : "KRD: Debate Training Programme I",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 16
        },
		  {
            "occasion" : "Advokesma: Forum Kesejahteraan Mahasiswa",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 16
        },
		  {
            "occasion" : "PSEUDO: Quiz Educative Tema Internasional",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 19
        },
		  {
            "occasion" : "Ekotif: Technical Meeting PWM",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 19
        },
		  {
            "occasion" : "KKI: Training Rohis 2",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 20
        },
		  {
            "occasion" : "KKI: Training Rohis 2",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 21
        },
		  {
            "occasion" : "KRD: Design Class",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 20
        },
		  {
            "occasion" : "ALSA: International Moot Court Competition Class",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 20
        },
		  {
            "occasion" : "KSBA: Pelatihan KTI",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 20
        },
		  {
            "occasion" : "PSEUDO: Do's Magazine Vol.1",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 20
        },
		  {
            "occasion" : "NEBULA: Latihan Dasar Nebula Indonesia",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 20
        },
		  {
            "occasion" : "NEBULA: Latihan Dasar Nebula Indonesia",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 21
        },
		  {
            "occasion" : "RISKEL: Research School 2",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 20
        },
		  {
            "occasion" : "PSDM: Pre-Phase 2 LKMM-D",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 20
        },
		  {
            "occasion" : "KRD: Creer Talk",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 21
        },
		  {
            "occasion" : "PRMK: Social Care PRMK",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 21
        },
		  {
            "occasion" : "KSBA: Toefl Class",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 26
        },
		  {
            "occasion" : "KSBA: Toefl Class",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 27
        },
		  {
            "occasion" : "ALSA: ALSA Internal Competition",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 27
        },
		  {
            "occasion" : "KDKS: Progressive Discussion",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 27
        },
		  {
            "occasion" : "PRMK: PRMK's Day Out",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 27
        },
		  {
            "occasion" : "PSDM: Jelajah Bidang LKMM-D",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 27
        },
		  {
            "occasion" : "NEBULA: Latihan Dasar NEBULA Indonesia",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 27
        },
		  {
            "occasion" : "NEBULA: Latihan Dasar NEBULA Indonesia",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 27
        },
		  {
            "occasion" : "NEBULA: Latihan Dasar NEBULA Indonesia",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 28
        },
		  {
            "occasion" : "HALMAS: BEM FH On Tour",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 28
        },
		  {
            "occasion" : "HALMAS: BEM FH On Tour",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 27
        },
		  {
            "occasion" : "ALSA: ALSA Social Visit",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 28
        },
		  {
            "occasion" : "SDG: 21th Anniversary PDM Satya Dharma Gita",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 28
        },
		  {
            "occasion" : "ADVOKESMA: Festival Beasiswa",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 30
        },
		  {
            "occasion" : "ADVOKESMA: Festival Beasiswa",
            "invited_count": 0,
            "year": 2023,
            "month": 5,
            "day": 31
        },
		  {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 1
        },
		  {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 2
        },
		  {
            "occasion" : "Pseudorechtpaark: Open Registration IPC",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 2
        },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 3
        },
		  {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 6
        },
		   {
            "occasion" : "PRMK: Perkasa",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 6
        },
		  {
            "occasion" : "KDKS: Monthly Discussion",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 6
        },
		  {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 7
        },
		  {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 8
        },
		  {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 9
        },
		  {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 10
        },
		  {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 11
        },
		  {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 12
        },
		  {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 13
        },
		  {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 14
        },
		  {
            "occasion" : "KSBA: Seminar Hukum",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 7
        },
		  {
            "occasion" : "GEMA KEADILAN: PJTLI",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 7
        },
		  {
            "occasion" : "KRD: Public Speaking Class 2023",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 7
        },
		  {
            "occasion" : "RISKEL: Academic Review 3.0",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 7
        },
		  {
            "occasion" : "PSDM: Leadership Training",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 7
        },
		  {
            "occasion" : "PSDM: Leadership Training",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 8
        },
		  {
            "occasion" : "PRMK: PRMK's Day Out",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 8
        },
		  {
            "occasion" : "KRD: Debat Internal DLF 2023",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 14
        },
		   {
            "occasion" : "KRD: Debat Internal DLF 2023",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 15
        },
		  {
            "occasion" : "HALMAS: M2O BEM FH Undip X BEM FH UB",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 21
        },
		  {
            "occasion" : "KAPRO: Toefl With Kapro",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 21
        },
		  {
            "occasion" : "KDKS: Upgrading Internal",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 21
        },
		  {
            "occasion" : "PRMK: PAB PRMK FH 2023",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 21
        },
		  {
            "occasion" : "GEMA KEADILAN: PJTLI",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 21
        },
		  {
            "occasion" : "KRD: Career Talk Vol.II",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 21
        },
		  {
            "occasion" : "KSBA: English Camp",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 21
        },
		  {
            "occasion" : "KSBA: English Camp",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 22
        },
		  {
            "occasion" : "EKOTIF: Entrepreneur Festival",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 24
        },
		  {
            "occasion" : "EKOTIF: Entrepreneur Festival",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 25
        },
		  {
            "occasion" : "EKOTIF: Entrepreneur Festival",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 26
        },
		  {
            "occasion" : "EKOTIF: Entrepreneur Festival",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 27
        },
		  {
            "occasion" : "GEMA KEADILAN: Audiensi Pers Nasional",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 27
        },
		  {
            "occasion" : "KRD: Diponegoro Law Fair",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 27
        },
		  {
            "occasion" : "KRD: Diponegoro Law Fair",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 28
        },
		  {
            "occasion" : "KRD: Diponegoro Law Fair",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 29
        },
		  {
            "occasion" : "KSBA: Cultural Training",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 28
        },
		  {
            "occasion" : "GEMA KEADILAN: Ngobrol Pintar",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 29
        },
		  {
            "occasion" : "PRMK: Social Care",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 29
        },
		  {
            "occasion" : "KRD: Seminar Nasional Diponegoro Law Fair 2023",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 29
        },
		  {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 4
        },
		 {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2023,
            "month": 10,
            "day": 5
         },
		 {
            "occasion" : "Open Recruitment Staf Ahli BEM FH Undip 2024",
            "invited_count": 0,
            "year": 2024,
            "month": 1,
            "day": 15
         },
		 {
            "occasion" : "Fit and Propper Test Staf Ahli BEM FH Undip 2024",
            "invited_count": 0,
            "year": 2024,
            "month": 1,
            "day": 17
         },
		   {
            "occasion" : "PSEUDORECHTPRAAK: Legal Workshop",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 7
         },
		  {
            "occasion" : "KDKS: Donor Darah",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 11
         },
		   {
            "occasion" : "PP: Seminar Nyala Setara",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 14
         },
		   {
            "occasion" : "DIMAS: Kelas Rakyat",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 14
         },
		   {
            "occasion" : "KSHI: Opening KSHI Legal Competition",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 14
         },
		    {
            "occasion" : "KRD: Diskusi Intelektual Muda",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 14
         },
		   {
            "occasion" : "KSBA; Leadership LAB",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 14
         },
		  {
            "occasion" : "PSEUDORECHTPRAAK: Opening IMOOT",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 14
         },
		   {
            "occasion" : "ADVOKESMA: Festival Beasiswa",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 14
         },
		   {
            "occasion" : "HALMAS: Meet Other Organization",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 14
         },
		   {
            "occasion" : "PRMK: Main Bareng Volume 3",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 15
         },
		  {
            "occasion" : "DIMAS: Kelas Rakyat",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 15
         },
		  {
            "occasion" : "PRMK: PERKASA",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 20
         },
		  {
            "occasion" : "KSHI: Kelas Kaderisasi",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 21
         },
		  {
            "occasion" : "KSBA: Foreign Culture Class",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 21
         },
		  {
            "occasion" : "BOLA: GUGUS CUP",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 21
         },
		  {
            "occasion" : "DIMAS: Kelas Rakyat",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 21
         },
		  {
            "occasion" : "BOLA: GUGUS CUP",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 22
         },
		  {
            "occasion" : "DIMAS: Kelas Rakyat",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 22
         },
		  {
            "occasion" : "EKOTIF: Law Young Entrepreneur",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 27
         },
		  {
            "occasion" : "KDKS: Institution Visit",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 27
         },
		  {
            "occasion" : "KSBA: Essay Training",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 28
         },
		  {
            "occasion" : "PSEUDORECHTSPRAAK: Leadership Class",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 28
         },
		  {
            "occasion" : "DIMAS: Kelas Rakyat",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 28
         },
		  {
            "occasion" : "KRD: Kelas Pemimpin",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 28
         },
		  {
            "occasion" : "PRMK: Sosial Talks",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 28
         },
		  {
            "occasion" : "DIMAS: Kelas Rakyat",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 29
         },
		  {
            "occasion" : "BOLA: Bincang Bola",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 29
         },
		  {
            "occasion" : "KMI: Penerbitan E-Zine Iconic Vol.7",
            "invited_count": 0,
            "year": 2024,
            "month": 9,
            "day": 30
         },
		  {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 1
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 2
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 3
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 4
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 5
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 6
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 7
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 8
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 9
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 10
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 11
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 12
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 13
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 14
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 15
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 16
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 17
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 18
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 19
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 20
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 21
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 22
         },
		   {
            "occasion" : "MIKAT: Batik Bersamaa Mikat",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 2
         },
		   {
            "occasion" : "KSHI: Studi Komparatif",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 5
         },
		   {
            "occasion" : "TPMO: Wawancara Penilaian Fungsionaris 2",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 5
         },
		   {
            "occasion" : "DIMAS: Kelas Rakyat",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 5
         },
		   {
            "occasion" : "HALMAS: Seminar Kebangsaan Alumni Gathering",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 5
         },
		   {
            "occasion" : "TPMO: Wawancara Penilaian Fungsionaris 2",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 6
         },
		   {
            "occasion" : "MIKAT: Dekan Cup",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 1
         },
		   {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 10
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 11
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 12
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 13
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 14
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 15
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 16
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 17
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 18
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 19
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 20
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 21
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 22
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 23
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 24
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 25
         },
		     {
            "occasion" : "KSBA: Studi Banding",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 26
         },
		     {
            "occasion" : "KSHI: Studi Banding 2",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 12
         },
		     {
            "occasion" : "HALMAS: Meet Other Organization",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 12
         },
		     {
            "occasion" : "DIMAS: Kelas Rakyat",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 13
         },
		     {
            "occasion" : "KSHI: Pelantihan Perancangan Undang-Undang",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 19
         },
		     {
            "occasion" : "KAPRO: Law Departement Fair",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 21
         },
		     {
            "occasion" : "PMK: Penyambutan Anggota Baru",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 25
         },
		     {
            "occasion" : "PMK: Penyambutan Anggota Baru",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 26
         },
		     {
            "occasion" : "PMK: Penyambutan Anggota Baru",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 27
         },
		     {
            "occasion" : "KSHI: Closing Ceremony KSHI Legal Competition 2024",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 26
         },
		     {
            "occasion" : "PSDMxHALMAS: Savoir De College",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 26
         },
		 {
            "occasion" : "KMI: Penerbitan E-Zine Iconic Vol.8",
            "invited_count": 0,
            "year": 2024,
            "month": 10,
            "day": 31
         },
		   {
            "occasion" : "PMK: Sharing Alumni",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 9
         },
		   {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 9
         },
		   {
            "occasion" : "PMK: Movie Time",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 15
         },
		   {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 10
         },
		   {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 11
         },
		   {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 12
         },
		   {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 13
         },
		   {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 14
         },
		   {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 15
         },
		   {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 16
         },
		   {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 17
         },
		   {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 18
         },
		   {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 19
         },
		   {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 20
         },
		   {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 21
         },
		   {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 22
         },
 {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 23
         },
		   {
            "occasion" : "MIKAT: Law Faculty Award",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 24
         },
		   {
            "occasion" : "HSP: Progressive Talks",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 15
         },
		   {
            "occasion" : "KRD: Law Journey x KRD Offline Visit",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 25
         },
		   {
            "occasion" : "RISKEL: Sekolah Mawapres",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 23
         },
		   {
            "occasion" : "RISKEL: Sekolah Mawapres",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 24
         },
		   {
            "occasion" : "KRD: Law Journey x KRD Offline Visit",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 26
         },
		   {
            "occasion" : "KRD: Law Journey x KRD Offline Visit",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 27
         },
		   {
            "occasion" : "KRD: Pre Competition Class",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 30
         },
		   {
            "occasion" : "BOLA: Piala Hukum 2024",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 22
         },
		   {
            "occasion" : "BOLA: Piala Hukum 2024",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 23
         },
		   {
            "occasion" : "KDKS: KDKS Mengajar",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 9
         },
		   {
            "occasion" : "KDKS: Progressive Disscussion 2",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 16
         },
		   {
            "occasion" : "KDKS: Konferensi Anggota KDKS",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 30
         },
		   {
            "occasion" : "KDKS: Konferensi Anggota KDKS",
            "invited_count": 0,
            "year": 2024,
            "month": 12,
            "day": 1
         },
		   {
            "occasion" : "LPM GEMA KEADILAN: Ngobrol Pintar",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 9
         },
		   {
            "occasion" : "LPM GEMA KEADILAN: Temu Alumni",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 16
         },
		   {
            "occasion" : "LPM GEMA KEADILAN: Suksesi",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 30
         },
		   {
            "occasion" : "LPM GEMA KEADILAN: Suksesi",
            "invited_count": 0,
            "year": 2024,
            "month": 12,
            "day": 1
         },
		   {
            "occasion" : "KSBA: Fushion Jepang ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 10
         },
		  {
            "occasion" : "KSBA: Fushion Jepang ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 11
         },
		  {
            "occasion" : "KSBA: Fushion Jepang ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 12
         },
		  {
            "occasion" : "KSBA: Fushion Jepang ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 13
         },
		  {
            "occasion" : "KSBA: Fushion Jepang ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 14
         },
		  {
            "occasion" : "KSBA: Fushion Jepang ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 15
         },
		  {
            "occasion" : "KSBA: Fushion Jepang ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 16
         },
		  {
            "occasion" : "KSBA: Fushion Belanda ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 17
         },
		  {
            "occasion" : "KSBA: Fushion Belanda ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 18
         },
		  {
            "occasion" : "KSBA: Fushion Belanda ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 19
         },
		  {
            "occasion" : "KSBA: Fushion Belanda ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 20
         },
		  {
            "occasion" : "KSBA: Fushion Belanda ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 21
         },
		  {
            "occasion" : "KSBA: Fushion Belanda ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 22
         },
		  {
            "occasion" : "KSBA: Fushion Belanda ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 23
         },
		  {
            "occasion" : "KSBA: Fushion Belanda ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 24
         },
		  {
            "occasion" : "KSBA: Fushion Belanda ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 25
         },
		  {
            "occasion" : "KSBA: Fushion Belanda ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 26
         },
		  {
            "occasion" : "KSBA: Fushion Belanda ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 27
         },
		  {
            "occasion" : "KSBA: Fushion Belanda ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 28
         },
		  {
            "occasion" : "KSBA: Fushion Belanda ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 29
         },
		  {
            "occasion" : "KSBA: Fushion Belanda ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 30
         },
		  {
            "occasion" : "KMI: Penerbitan E-Zine Volume 9 ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 30
         },
		  {
            "occasion" : "KSHI: Seminar Nasional  ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 16
         },
		  {
            "occasion" : "KSHI: Sosial Care ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 23
         },
		  {
            "occasion" : "KSHI: Sosial Care ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 24
         },
		  {
            "occasion" : "PRMK: Perkasa ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 1
         },
		  {
            "occasion" : "PRMK: Spiritual Growth ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 9
         },
		  {
            "occasion" : "PRMK: Penerimaan Anggota Baru PRMK FH ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 16
         },
		  {
            "occasion" : "PRMK: Penerimaan Anggota Baru PRMK FH ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 17
         },
		  {
            "occasion" : "PRMK: Social Action ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 24
         },
		  {
            "occasion" : "ALSA LC Undip: The 14th ALSA English Festival ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 2
         },
		    {
            "occasion" : "ALSA LC Undip: The 14th ALSA English Festival ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 3
         },
		    {
            "occasion" : "ALSA LC Undip: The 14th ALSA English Festival ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 3
         },
		    {
            "occasion" : "ALSA LC Undip: The 14th ALSA English Festival ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 4
         },
		    {
            "occasion" : "ALSA LC Undip: The 14th ALSA English Festival ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 5
         },
		    {
            "occasion" : "ALSA LC Undip: The 14th ALSA English Festival ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 6
         },
		    {
            "occasion" : "ALSA LC Undip: The 14th ALSA English Festival ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 7
         },
		    {
            "occasion" : "ALSA LC Undip: The 14th ALSA English Festival ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 8
         },
		    {
            "occasion" : "ALSA LC Undip: The 14th ALSA English Festival ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 9
         },
		    {
            "occasion" : "ALSA LC Undip: The 14th ALSA English Festival ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 10
         },
		    {
            "occasion" : "ALSA LC Undip: ALSA Transition Day ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 23
         },
		    {
            "occasion" : "ALSA LC Undip: ALSA Night ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 30
         },
		    {
            "occasion" : "PSM SDG: Orientation Of PSM SDG 2024 ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 23
         },
		    {
            "occasion" : "PSM SDG: Orientation of PSM SDG 2024 ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 24
         },
		    {
            "occasion" : "DIMAS:Abdi Progresif Talk 2 ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 21
         },
		    {
            "occasion" : "ADVOKESMA: Beasiswa Aksata Kirana ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 16
         },
		    {
            "occasion" : "Pseudorechtspraak: Pseudo Visit ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 15
         },
		   {
            "occasion" : "Pseudorechtspraak: Pseudo Visit ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 16
         },
		   {
            "occasion" : "Pseudorechtspraak: Closing IMOOT ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 23
         },
		   {
            "occasion" : "Pseudorechtspraak: Internal Pseudo Competition ",
            "invited_count": 0,
            "year": 2024,
            "month": 11,
            "day": 30
         },
		  {
            "occasion" : "KSHI: Muktamar",
            "invited_count": 0,
            "year": 2024,
            "month": 12,
            "day": 1
         },
		  {
            "occasion" : "PP: 16HAKTP",
            "invited_count": 0,
            "year": 2024,
            "month": 12,
            "day": 1
         },
		  {
            "occasion" : "ALSA: Musyawarah Lokal XXIX",
            "invited_count": 0,
            "year": 2024,
            "month": 12,
            "day": 6
         },
		  {
            "occasion" : "KRD: Musyawarah Besar",
            "invited_count": 0,
            "year": 2024,
            "month": 12,
            "day": 6
         },
		  {
            "occasion" : "Pseudo: Musyawarah Umum",
            "invited_count": 0,
            "year": 2024,
            "month": 12,
            "day": 1
         },
		  {
            "occasion" : "TPMO: Rapat Umum Akhir Tahun BEM FH Undip",
            "invited_count": 0,
            "year": 2024,
            "month": 12,
            "day": 7
         },
		  {
            "occasion" : "Gema Keadilan: Suksesi",
            "invited_count": 0,
            "year": 2024,
            "month": 12,
            "day": 7
         },
		  {
            "occasion" : "KMI: Penerbitan E-Zine ICONIC Volume 10 (Last Edition)",
            "invited_count": 0,
            "year": 2024,
            "month": 12,
            "day": 7
         },
		  {
            "occasion" : "KSBA: Suksesi",
            "invited_count": 0,
            "year": 2024,
            "month": 12,
            "day": 7
         },
		  {
            "occasion" : "BEM FH: Sorai",
            "invited_count": 0,
            "year": 2024,
            "month": 12,
            "day": 14
         },
      ]
	  
  };

  const months = [
      "Januari",
      "Februari",
      "Maret",
      "April",
      "Mei",
      "Juni",
      "Juli",
      "Agustus",
      "September",
      "Oktober",
      "November",
      "Desember"
  ];
</script>
</body>

</html>