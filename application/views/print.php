<!DOCTYPE html> 
<html><head> 
 <title>Pemeriksaan</title> 
 <style> 
  table{ 
   border-collapse: collapse; 
   width: 70%; 
   margin: 0 auto; 
  } 
  table th{ 
   border:1px solid #000; 
   padding: 3px; 
   font-weight: bold; 
   text-align: center; 
  } 
  table td{ 
   border: 1px solid #000; 
   padding: 3px; 
   vertical-align: top; 
  } 
 </style> 
</head><body> 
<h1><p style="text-align: center">Data Pemeriksaan</p> </h1>
<table> 
 <tr> 
      <th>Tanggal Pemeriksaan</th>
      <th>Penyakit</th>
      <th>Persentase (%)</th>
      <th>Status</th>
      <th>Tanggal direvisi</th>
      <th>Pemeriksaan</th>
 </tr> 
 <?php $id=0; foreach ($pemeriksaan as $key) { 
 $id++; 
 ?> 
  <tr>
  <td><?php echo $key->tgl_pemeriksaan;?></td>
  <td><?php echo $key->nama_penyakit;?></td>
  <td><?php echo $key->hasil;?></td>
  <td><?php echo $key->status;?></td>
  <td><?php echo $key->tgl_revisi;?></td>
  <td><?php echo $key->id_pengelola;?></td>

  
  </tr> 
 <?php }?> 
</table> 
 
</body></html>