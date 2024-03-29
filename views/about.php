<?php
include "views/partials/header.php"
?>

<style>
  .about-upper {
    background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("../images/siteImages/AVIS-768x559.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementsByClassName("h1top")[0].textContent = "About Us";
    document.title = "About Us";
  });
</script>
<div class="outer-container">
  <div class="inner-container">
    <div class="content-container">
      <div class="content-box">
        <p class="section-head">
          Group 4 Devs Team
        </p>
        <p class="section-body">
          Our award-winning web development team is comprised of passionate and creative minds, each bringing a unique blend of front-end, back-end, and UX expertise. Fueled by a shared enthusiasm for innovation, they excel in crafting responsive, user-centric websites and applications. Their collaborative spirit and dedication to continuous learning ensure they stay at the forefront of emerging web development trends and technologies. This translates into exceptional digital solutions for our clients, achieved through meticulous attention to detail, unwavering commitment to quality code, and a relentless pursuit of user satisfaction. United by their love for web development and a desire to make a positive impact, this cohesive and motivated team is prepared to tackle any project with unmatched expertise and unwavering dedication.
        </p>
      </div>
    </div>
    <!-- <div class="team-cards-outer-container"> -->
    <div class="team-cards-inner-container">
      <?php
      $stmt = $pdo->prepare("SELECT * FROM devsteam");
      $stmt->execute();
      while ($memberDetails = $stmt->fetch(PDO::FETCH_ASSOC)) {
      ?>
        <div class="card-container">
          <div class="card">
            <div class="img-box">
              <img class="person-img" src="<?php echo $memberDetails['MemberImg']; ?>">
            </div>
            <div class="card-content-box">
              <p class="person-name">
                <?php echo $memberDetails['MemberName']; ?>
              </p>
              <p class="person-info">
                <?php echo $memberDetails['MemberRole']; ?>
              </p>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>
</div>


<section class="location-distribution">
  <div class="left-section">
    <h1>Distribution Network</h1>
    <div class="branches-list-container">
      <div class="branches-left">
        <h2>Branch Network</h2>
        <ul class="branches-list">
          <li>Nairobi</li>
          <li>Mombasa</li>
          <li>Kisumu</li>
          <li>Kisii</li>
          <li>Narok</li>
          <li>Nyeri</li>
        </ul>
      </div>
      <div class="branches-right">
        <h2>Dealer Network</h2>
        <ul class="branches-list">
          <li>Nairobi</li>
          <li>Nakuru</li>
          <li>Eldoret</li>
          <li>Nanyuki</li>
          <li>Marsabit</li>
          <li>Meru</li>
          <li>Kericho</li>
          <li>Thika</li>
          <li>Machakos</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="right-section">
    <div class="branches-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.364608379728!2d36.79972892839004!3d-1.2681032269146408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f18222ae24c19%3A0x8d5b8d0fead27cb1!2sSimba%20Corp%20Head%20Office!5e0!3m2!1sen!2ske!4v1643468836287!5m2!1sen!2ske" allowfullscreen="" loading="lazy">
      </iframe>
    </div>
  </div>
</section>

<?php
include_once "views/partials/footer.php"
?>