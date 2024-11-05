<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTables Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Latar belakang penuh */
        }
        #example {
            background-color: #ffffff; /* Warna latar belakang tabel */
        }
        #example thead {
            background-color: #007bff; /* Baris judul biru */
            color: white; /* Teks putih untuk judul */
        }
        #example tbody tr:nth-child(1) {
            background-color: #007bff; /* Baris pertama biru */
            color: white; /* Teks putih untuk baris pertama */
        }
        #example tbody tr:nth-child(2) {
            background-color: #e7f1ff; /* Baris kedua biru muda */
        }
        #example tbody tr:nth-child(odd) {
            background-color: #f9f9f9; /* Warna latar belakang baris ganjil */
        }
        #example tbody tr:hover {
            background-color: #d1ecf1; /* Warna latar belakang saat hover */
        }
    </style>
</head>
<body>

<h2>Datatables</h2>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>
    <tr>
      <td>Denta Pramudya</td>
      <td>System Architect</td>
      <td>Tokyo</td>
      <td>20</td>
      <td>2003/04/25</td>
      <td>$999,999</td>
    </tr>
    <tr>
      <td>Ethan Winters</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      <td>2011/07/25</td>
      <td>$300,750</td>
    </tr>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011-04-25</td>
      <td>$320,800</td>
    </tr>
    <tr>
      <td>Garrett Winters</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      <td>2011-07-25</td>
      <td>$170,750</td>
    </tr>
    <tr>
      <td>Ashton Cox</td>
      <td>Junior Technical Author</td>
      <td>San Francisco</td>
      <td>66</td>
      <td>2009-01-12</td>
      <td>$86,000</td>
    </tr>
    <tr>
      <td>Cedric Kelly</td>
      <td>Senior Javascript Developer</td>
      <td>Edinburgh</td>
      <td>22</td>
      <td>2012-03-29</td>
      <td>$433,060</td>
    </tr>
    <tr>
      <td>Airi Satou</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>33</td>
      <td>2008-11-28</td>
      <td>$162,700</td>
    </tr>
    <tr>
      <td>Brielle Williamson</td>
      <td>Integration Specialist</td>
      <td>New York</td>
      <td>61</td>
      <td>2012-12-02</td>
      <td>$372,000</td>
    </tr>
    <tr>
      <td>Herrod Chandler</td>
      <td>Sales Assistant</td>
      <td>San Francisco</td>
      <td>59</td>
      <td>2012-08-06</td>
      <td>$137,500</td>
    </tr>
    <tr>
      <td>Rhona Davidson</td>
      <td>Integration Specialist</td>
      <td>Tokyo</td>
      <td>55</td>
      <td>2010-10-14</td>
      <td>$327,900</td>
    </tr>
    <tr>
      <td>Colleen Hurst</td>
      <td>Javascript Developer</td>
      <td>San Francisco</td>
      <td>39</td>
      <td>2009-09-15</td>
      <td>$205,500</td>
    </tr>
    <tr>
      <td>Sonya Frost</td>
      <td>Software Engineer</td>
      <td>Edinburgh</td>
      <td>23</td>
      <td>2008-12-13</td>
      <td>$103,600</td>
    </tr>
    <tr>
      <td>Jena Gaines</td>
      <td>Office Manager</td>
      <td>London</td>
      <td>30</td>
      <td>2008-12-19</td>
      <td>$90,560</td>
    </tr>
    <tr>
      <td>Quinn Flynn</td>
      <td>Support Lead</td>
      <td>Edinburgh</td>
      <td>22</td>
      <td>2013-03-03</td>
      <td>$342,000</td>
    </tr>
    <tr>
      <td>Charde Marshall</td>
      <td>Regional Director</td>
      <td>San Francisco</td>
      <td>36</td>
      <td>2008-10-16</td>
      <td>$470,600</td>
    </tr>
    <tr>
      <td>Haley Kennedy</td>
      <td>Senior Marketing Designer</td>
      <td>London</td>
      <td>43</td>
      <td>2012-12-18</td>
      <td>$313,500</td>
    </tr>
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
</body>
</html>
