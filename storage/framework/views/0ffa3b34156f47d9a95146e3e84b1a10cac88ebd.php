<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading">Update Data Jabatan</div>
                <div class="panel-body">
<?php echo Form::model($Jabatan, ['method' => 'PATCH','route'=>['Jabatan.update', $Jabatan->id]]); ?>

<div class="form-group">
<?php echo Form::label('Kode_jabatan', 'Kode_jabatan:'); ?>

<?php echo Form::text('Kode_jabatan' ,null,['class'=>'form-control']); ?>

</div>
<div class="form-group">
<?php echo Form::label('Nama_jabatan', 'Nama_jabatan:
'); ?>

<?php echo Form::text('Nama_jabatan' ,null,['class'=>'form-control']); ?>

</div>
<div class="form-group">
<?php echo Form::label('Besaran_uang', 'Besaran_uang:
'); ?>

<?php echo Form::text('Besaran_uang' ,null,['class'=>'form-control']); ?>

</div>
<div class="form-group">
<?php echo Form::submit('Update', ['class' => 'btn btn-danger']); ?>

</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>