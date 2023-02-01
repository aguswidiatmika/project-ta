<x-layouts.app title="Dashboard">
  <h1 class="h3 mb-3">Dashboard</h1>

  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col mt-0">
              <h5 class="card-title">Users</h5>
            </div>
            <div class="col-auto">
              <div class="stat text-primary">
                <i class="align-middle" data-feather="users"></i>
              </div>
            </div>
          </div>
          <h1 class="mt-1">2.382</h1>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col mt-0">
              <h5 class="card-title">Barang</h5>
            </div>
            <div class="col-auto">
              <div class="stat text-primary">
                <i class="align-middle" data-feather="truck"></i>
              </div>
            </div>
          </div>
          <h1 class="mt-1">123</h1>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col mt-0">
              <h5 class="card-title">Request</h5>
            </div>
            <div class="col-auto">
              <div class="stat text-primary">
                <i class="align-middle" data-feather="message-square"></i>
              </div>
            </div>
          </div>
          <h1 class="mt-1">21</h1>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col mt-0">
              <h5 class="card-title">Reminder</h5>
            </div>
            <div class="col-auto">
              <div class="stat text-primary">
                <i class="align-middle" data-feather="calendar"></i>
              </div>
            </div>
          </div>
          <h1 class="mt-1">2</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-lg-8 col-xxl-9 d-flex">
      <div class="card flex-fill">
        <div class="card-header">
          <h5 class="card-title mb-0">Request Service</h5>
        </div>
        <table class="table table-hover my-0">
          <thead>
            <tr>
              <th>Name</th>
              <th class="d-none d-xl-table-cell">Start Date</th>
              <th class="d-none d-xl-table-cell">End Date</th>
              <th>Status</th>
              <th class="d-none d-md-table-cell">Assignee</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Project Apollo</td>
              <td class="d-none d-xl-table-cell">01/01/2021</td>
              <td class="d-none d-xl-table-cell">31/06/2021</td>
              <td><span class="badge bg-success">Done</span></td>
              <td class="d-none d-md-table-cell">Vanessa Tucker</td>
            </tr>
            <tr>
              <td>Project Fireball</td>
              <td class="d-none d-xl-table-cell">01/01/2021</td>
              <td class="d-none d-xl-table-cell">31/06/2021</td>
              <td><span class="badge bg-danger">Cancelled</span></td>
              <td class="d-none d-md-table-cell">William Harris</td>
            </tr>
            <tr>
              <td>Project Hades</td>
              <td class="d-none d-xl-table-cell">01/01/2021</td>
              <td class="d-none d-xl-table-cell">31/06/2021</td>
              <td><span class="badge bg-success">Done</span></td>
              <td class="d-none d-md-table-cell">Sharon Lessman</td>
            </tr>
            <tr>
              <td>Project Nitro</td>
              <td class="d-none d-xl-table-cell">01/01/2021</td>
              <td class="d-none d-xl-table-cell">31/06/2021</td>
              <td><span class="badge bg-warning">In progress</span></td>
              <td class="d-none d-md-table-cell">Vanessa Tucker</td>
            </tr>
            <tr>
              <td>Project Phoenix</td>
              <td class="d-none d-xl-table-cell">01/01/2021</td>
              <td class="d-none d-xl-table-cell">31/06/2021</td>
              <td><span class="badge bg-success">Done</span></td>
              <td class="d-none d-md-table-cell">William Harris</td>
            </tr>
            <tr>
              <td>Project X</td>
              <td class="d-none d-xl-table-cell">01/01/2021</td>
              <td class="d-none d-xl-table-cell">31/06/2021</td>
              <td><span class="badge bg-success">Done</span></td>
              <td class="d-none d-md-table-cell">Sharon Lessman</td>
            </tr>
            <tr>
              <td>Project Romeo</td>
              <td class="d-none d-xl-table-cell">01/01/2021</td>
              <td class="d-none d-xl-table-cell">31/06/2021</td>
              <td><span class="badge bg-success">Done</span></td>
              <td class="d-none d-md-table-cell">Christina Mason</td>
            </tr>
            <tr>
              <td>Project Wombat</td>
              <td class="d-none d-xl-table-cell">01/01/2021</td>
              <td class="d-none d-xl-table-cell">31/06/2021</td>
              <td><span class="badge bg-warning">In progress</span></td>
              <td class="d-none d-md-table-cell">William Harris</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-12 col-lg-4 col-xxl-3 d-flex">
      <div class="card flex-fill">
        <div class="card-header">
          <h5 class="card-title mb-0">Calendar</h5>
        </div>
        <div class="card-body d-flex">
          <div class="align-self-center w-100">
            <div class="chart">
              <div id="datetimepicker-dashboard"></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
      var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
      document.getElementById("datetimepicker-dashboard").flatpickr({
        inline: true,
        prevArrow: "<span title=\"Previous month\">&laquo;</span>",
        nextArrow: "<span title=\"Next month\">&raquo;</span>",
        defaultDate: defaultDate
      });
    });
  </script>
</x-layouts.app>
