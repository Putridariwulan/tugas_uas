<?= $this->include('header'); ?>
<?= $this->include('sidemenu'); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Berdasarkan Prodi</h1>
      <nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                
<div>
  <canvas id="myChart"></canvas>
</div>

            
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <?= $this->include('footer'); ?>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<style>
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>
<script>
// Create chart instance in one go
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Teknik Informatika','Sistem Informasi'],
      datasets: [{
        label: 'Prodi',
        data: [100, 80, 0, 0, 0, 0],
        borderWidth: 0
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
    
  // Add data
  
  "data":  <?php echo file_get_contents(base_url('grafik_prodi/grafik_prodi_json')); ?>,