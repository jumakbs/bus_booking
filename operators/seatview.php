<?php
   include('includes/header.php');
   include('includes/navbar.php');
?>

<div class="bus">
  <form method="post">
  <ol class="bus_seat">
    <img src="img/steering.png" alt="driver" width="30" height="30" style="margin-left:8.45em; margin-top: 0.3em";>
    <li class="row row--1">
      <ol class="seats" type="A">

        <li class="seat">
        <i class="fa-solid fa-chair">
          <input type="checkbox" name="seatcheckbox[]" value="Seat 1" id="1"/>
          <label for="1"></label>
          </i>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="Seat 2" id="2"/>
          <label for="2"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="3" id="3"/>
          <label for="3"></label>
        </li>
      </ol>
    </li>
    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="4" id="4"/>
          <label for="4"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="5" id="5"/>
          <label for="5"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="6" id="6"/>
          <label for="6"></label>
        </li>
      </ol>
    </li>
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="7" id="7"/>
          <label for="7"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="8" id="8"/>
          <label for="8"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="9" id="9"/>
          <label for="9"></label>
        </li>
      </ol>
    </li>
    <li class="row row--4">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="10" id="10"/>
          <label for="10"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="11" id="11"/>
          <label for="11"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="12" id="12"/>
          <label for="12"></label>
        </li>
      </ol>
    </li>
    <li class="row row--5">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="13" id="13"/>
          <label for="13"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="14" id="14"/>
          <label for="14"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="15" id="15"/>
          <label for="15"></label>
        </li>
      </ol>
    </li>
    <li class="row row--6">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="16" id="16"/>
          <label for="16"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="17" id="17"/>
          <label for="17"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="18" id="18"/>
          <label for="18"></label>
        </li>
      </ol>
    </li>
    <li class="row row--7">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="19" id="19"/>
          <label for="19"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="20" id="20"/>
          <label for="20"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="21" id="21"/>
          <label for="21"></label>
        </li>
      </ol>
    </li>
    <li class="row row--8">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="22" id="22"/>
          <label for="22"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="23" id="23"/>
          <label for="23"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="24" id="24"/>
          <label for="24"></label>
        </li>
      </ol>
    </li>
    <li class="row row--9">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="25" id="25"/>
          <label for="25"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="26" id="26"/>
          <label for="26"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="27" id="27"/>
          <label for="27"></label>
        </li>
      </ol>
    </li>
    <li class="row row--10">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="28" id="28"/>
          <label for="28"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="29" id="29"/>
          <label for="29"></label>
        </li>

        <li class="seat">
          <input type="checkbox" name="seatcheckbox[]" value="30" id="30"/>
          <label for="30"></label>
        </li>
      </ol>
    </li>
  </ol>
  <input type="submit" name="submit" value="Submit">
</form>
</div>


<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>