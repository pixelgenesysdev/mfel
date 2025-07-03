<?php 
include __DIR__ . '/../includes/head.php';
?>

<link rel="stylesheet" href="<?= SITE_URL; ?>assets/css/stepform.css">



<div id="page_box">









    <div id="stressPage" class="page">
      <div class="inner_box">
          <div class="stress-meter" style="background-image: url('<?php echo SITE_URL; ?>assets/images/stress_meter_bg.png');">
            <div id="stressPointer" class="stress-pointer" style="background-image: url('<?php echo SITE_URL; ?>assets/images/stress_meter_arrow.png');"></div>
          </div>
        <h3>How's your stress-o-meter today?</h3>
        <p>Feeling like you're about to explode,<br> or is everything chill?</p>
        <div class="stress-box">
          <button class="stress-icons" style="background-image: url('<?php echo SITE_URL; ?>assets/images/metal_buttn_bg.png');" data-angle="-115" data-color="#ff4d4d" onclick="stressMood2(this)"></button>
          <button class="stress-icons" style="background-image: url('<?php echo SITE_URL; ?>assets/images/water_buttn_bg.png');" data-angle="-70" data-color="#ff8c1a" onclick="stressMood2(this)"></button>
          <button class="stress-icons" style="background-image: url('<?php echo SITE_URL; ?>assets/images/wood_buttn_bg.png');" data-angle="-21" data-color="#ffd700" onclick="stressMood2(this)"></button>
          <button class="stress-icons" style="background-image: url('<?php echo SITE_URL; ?>assets/images/fire_buttn_bg.png');" data-angle="22" data-color="#9acd32" onclick="stressMood2(this)"></button>
          <button class="stress-icons" style="background-image: url('<?php echo SITE_URL; ?>assets/images/earth_buttn_bg.png');" data-angle="70" data-color="#32cd32" onclick="stressMood2(this)"></button>
          <button class="stress-icons" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');" data-angle="115" data-color="#32cd32" onclick="stressMood2(this)"></button>
        </div>
        <button type="button" class="step-form btn btn-primary btn-sm" onclick="nextPage('moodPage')">Next</button>
      </div>
    </div>

    <div id="moodPage" class="page hidden">
      <div class="inner_box">
          <div class="mood-meter" style="background-image: url('<?php echo SITE_URL; ?>assets/images/mood_meter_bg.png');">
            <div id="moodPointer" class="mood-pointer" style="background-image: url('<?php echo SITE_URL; ?>assets/images/mood_meter_arrow.png');"></div>
            <div class="mood-center" style="background-image: url('<?php echo SITE_URL; ?>assets/images/mood_meter_arrow_bg.png');"><i class="fa-solid fa-face-smile"></i></div>
          </div>
        <h3>Mood Check!</h3>
        <p>Are you riding the wave of joy, or is today<br> a 'meh' kind of day?</p>
        <div class="mood-icons">
          <img class="mood-button" src="<?php echo SITE_URL; ?>assets/images/mood-small_icon1.png" data-angle="191" id="moodIcon" data-color="#ff4d4d" onclick="updateMood(this)">
          <img class="mood-button" src="<?php echo SITE_URL; ?>assets/images/mood-small_icon2.png" data-angle="260" id="moodIcon" data-color="#ff8c1a" onclick="updateMood(this)">
          <img class="mood-button" src="<?php echo SITE_URL; ?>assets/images/mood-small_icon3.png" data-angle="336" id="moodIcon" data-color="#ffd700" onclick="updateMood(this)">
          <img class="mood-button" src="<?php echo SITE_URL; ?>assets/images/mood-small_icon4.png" data-angle="50"  id="moodIcon" data-color="#9acd32" onclick="updateMood(this)">
          <img class="mood-button" src="<?php echo SITE_URL; ?>assets/images/mood-small_icon5.png" data-angle="118" id="moodIcon" data-color="#32cd32" onclick="updateMood(this)">
        </div>
        <button type="button" class="step-form btn btn-primary btn-sm" onclick="nextPage('sleepPage')">Next</button>
      </div>
    </div>

    <div id="sleepPage" class="page hidden">
      <div class="inner_box">
        <img src="<?php echo SITE_URL; ?>assets/images/sleep-slide_image.png" id="sleepEmoji" alt="Sleep Emoji" class="sleep-emoji single_main_image">
        <h3>Sleep Level, Are you easily fall a sleep? <br>do you sleep solid through all night?</h3>
        <p>Did you snooze like a baby, or are you in need of a nap?</p>
        <div class="sleep-inputs">
          <input type="number" id="sleepHours" min="0" max="12" placeholder="00" oninput="updateSleep()">
          <span>:</span>
          <input type="number" id="sleepMinutes" min="0" max="59" placeholder="00" oninput="updateSleep()">
        </div>

        <button type="button" class="step-form btn btn-primary btn-sm"  onclick="nextPage('energyPage')">Next</button>
      </div>
    </div>

    <div id="energyPage" class="page hidden">
      <div class="inner_box">
        <img src="<?php echo SITE_URL; ?>assets/images/energy-slide_image.png" alt="Energy Emoji" class="energy-emoji single_main_image">
        <h3>Energy Status, Ready to conquer the world,<br>or more like a sleepy sloth?</h3>
        <p>Did you snooze like a baby, or are you in need of a nap?</p>
        <div class="progress-box">

              <div id="energyPercentage" class="progress-percentage">0%</div>
              <input type="range" class="energy-slider" id="energySlider" min="0" max="100" value="0" oninput="updateEnergyProgress(this.value)">
        </div>
        <button type="button" class="step-form btn btn-primary btn-sm"  onclick="showTaskDonestepform()">Done</button>
      </div>
    </div>




    <!-- <div id="sleepPage" class="page hidden">
      <div class="inner_box">
        <img src="<?php echo SITE_URL; ?>assets/images/sleep-slide_image.png" alt="Sleep Emoji" class="sleep-emoji single_main_image">
        <h3>Sleep Level, Are you easily fall a sleep? <br>do you sleep solid through all night?</h3>
        <p>Did you snooze like a baby, or are you in need of a nap?</p>
        <div class="sleep-inputs">
          <input type="number" id="sleepHours" min="0" max="12" placeholder="00" oninput="updateSleep()">
          <span>:</span>
          <input type="number" id="sleepMinutes" min="0" max="59" placeholder="00" oninput="updateSleep()">
        </div>
        <button type="button" class="step-form btn btn-primary btn-sm"  onclick="nextPage('moodPage')">Next</button>
      </div>
    </div> -->

    <!-- <div id="stressPage" class="page hidden">
      <div class="inner_box">
          <div class="stress-meter" style="background-image: url('<?php echo SITE_URL; ?>assets/images/stress_meter_bg.png');">
            <div id="stressPointer" class="stress-pointer" style="background-image: url('<?php echo SITE_URL; ?>assets/images/stress_meter_arrow.png');"></div>
          </div>
        <h3>How's your stress-o-meter today?</h3>
        <p>Feeling like you're about to explode,<br> or is everything chill?</p>
        <div class="stress-box">
          <button class="stress-icons" style="background-image: url('<?php echo SITE_URL; ?>assets/images/metal_buttn_bg.png');" data-angle="-115" data-color="#ff4d4d" onclick="stressMood2(this)"></button>
          <button class="stress-icons" style="background-image: url('<?php echo SITE_URL; ?>assets/images/water_buttn_bg.png');" data-angle="-70" data-color="#ff8c1a" onclick="stressMood2(this)"></button>
          <button class="stress-icons" style="background-image: url('<?php echo SITE_URL; ?>assets/images/wood_buttn_bg.png');" data-angle="-21" data-color="#ffd700" onclick="stressMood2(this)"></button>
          <button class="stress-icons" style="background-image: url('<?php echo SITE_URL; ?>assets/images/fire_buttn_bg.png');" data-angle="22" data-color="#9acd32" onclick="stressMood2(this)"></button>
          <button class="stress-icons" style="background-image: url('<?php echo SITE_URL; ?>assets/images/earth_buttn_bg.png');" data-angle="70" data-color="#32cd32" onclick="stressMood2(this)"></button>
          <button class="stress-icons" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');" data-angle="115" data-color="#32cd32" onclick="stressMood2(this)"></button>
        </div>
        <button type="button" class="step-form btn btn-primary btn-sm" onclick="nextPage('stressPage')">Next</button>
      </div>
    </div> -->

    <!-- <div id="stressPage" class="page hidden">
      <div class="inner_box">
        <h3>How's your stress-o-meter today?</h3>
        <p>Feeling like you're about to explode, <br>or is everything chill?</p>
        <div class="stress-meter">
          <div class="stress-pointer" id="stressPointer"></div>
        </div>
        <input type="range" class="stress-slider" id="stressLevel" min="0" max="100" value="0" oninput="updateProgress('stress', this)">
        <button class="button" onclick="alert('Form Submitted!')">Next</button>
      </div>
    </div> -->


  <script>
    let currentPage = 'stressPage';


    // for step form 
    function nextPage(pageId) {
      document.getElementById(currentPage).classList.add('hidden');
      document.getElementById(pageId).classList.remove('hidden');
      currentPage = pageId;
    }




      // for sleep hours and minutes
    function updateSleep() {
      let hours = parseInt(document.getElementById('sleepHours').value) || 0;
      let minutes = parseInt(document.getElementById('sleepMinutes').value) || 0;
      const sleepEmoji = document.getElementById('sleepEmoji');


      if (hours > 12) hours = 12;
      if (minutes > 59) minutes = 59;
      document.getElementById('sleepHours').value = hours.toString().padStart(2, '0');
      document.getElementById('sleepMinutes').value = minutes.toString().padStart(2, '0');


      

      if ( hours < 6) {
        sleepEmoji.src = '<?php echo SITE_URL; ?>assets/images/sleep-slide_image1.png';
      } 
      
      else {
        sleepEmoji.src = '<?php echo SITE_URL; ?>assets/images/sleep-slide_image2.png';
      }

    }

    // for Mood Check! Meter

    function updateMood(element) {
      const angle = parseInt(element.getAttribute('data-angle'));
      const color = element.getAttribute('data-color');
      const pointer = document.getElementById('moodPointer');
      const iconMood = document.getElementById('moodIcon');

      // ✅ Remove 'active' from all mood buttons
      const allMoodButtons = document.querySelectorAll('.mood-button'); // or your actual class
      allMoodButtons.forEach(btn => btn.classList.remove('active'));

      // ✅ Add 'active' to clicked one
      element.classList.add('active');

   

      // ✅ Rotate pointer
      pointer.style.transform = `translate(-50%, -100%) rotate(${angle}deg)`;

      // ✅ Optionally change icon or pointer color
      // iconMood.src = `path/to/icon-${color}.png`; // if mood changes icon
    }




    
    function stressMood2(element) {
            let angle = parseInt(element.getAttribute('data-angle'));
            let color = element.getAttribute('data-color');
            let pointer = document.getElementById('stressPointer');

            pointer.style.transform = `translate(-50%, -100%) rotate(${angle}deg)`;

    }

    function updateEnergyProgress(value) {
        const percentageDisplay = document.getElementById('energyPercentage');
        const slider = document.getElementById('energySlider');
 
        
        

        percentageDisplay.textContent = value + '%';

        // Update the slider background dynamically


          const allBgClasses = [
            'bg-ff4a35',
            'bg-ff9c1b',
            'bg-fff234',
            'bg-d1e702',
            'bg-93d804'
          ];


        const percentage = value;
            
          if (percentage <= 25) {
            slider.style.background = `linear-gradient(to right, #ff4a35 ${percentage}%,rgba(0, 0, 0, 0) ${percentage}%)`;
            slider.classList.remove(...allBgClasses);
            slider.classList.add('bg-ff4a35');
          }
          else if (percentage <= 50) {
            slider.style.background = `linear-gradient(to right, #ff9c1b ${percentage}%,rgba(0, 0, 0, 0) ${percentage}%)`;
            slider.classList.remove(...allBgClasses);
            slider.classList.add('bg-ff9c1b');
          }
          else if (percentage <= 75) {
            slider.style.background = `linear-gradient(to right, #fff234 ${percentage}%,rgba(0, 0, 0, 0) ${percentage}%)`;
            slider.classList.remove(...allBgClasses);
            slider.classList.add('bg-fff234');
          }
          else if (percentage < 99) {
            slider.style.background = `linear-gradient(to right, #d1e702 ${percentage}%,rgba(0, 0, 0, 0) ${percentage}%)`;
            slider.classList.remove(...allBgClasses);
            slider.classList.add('bg-d1e702');
          }
          else {
            slider.style.background = `linear-gradient(to right, #93d804 ${percentage}%,rgba(0, 0, 0, 0) ${percentage}%)`;
            slider.classList.remove(...allBgClasses);
            slider.classList.add('bg-93d804');
          }
        
    }


  </script>


</div>

<?php 
include __DIR__ . '/../includes/footer.php';
?>
