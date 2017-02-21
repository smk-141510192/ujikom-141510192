<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Create Data Penggajian</div>
                <div class="panel-body">
                
<?php echo Form::open(['url' => 'Penggajian']); ?>


<div class="form-group">
<?php echo Form::label('Kode_tunjangan_pegawai', 'Kode Tunjangan Pegawai:
'); ?>

<select name="Kode_tunjangan_pegawai" class="form-control">
	<?php $__currentLoopData = $Tunjangan_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_tunjangan_pegawai); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>

<div class="form-group">
<?php echo Form::label('Nip', 'Nip:
'); ?>

<select name="Nip" class="form-control">
	<?php $__currentLoopData = $Pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<option value="<?php echo e($data->id); ?>"><?php echo e($data->Nip); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>

<div class="form-group">
<?php echo Form::label('Status_pengambilan', 'Status:'); ?>

<?php echo Form::text('Status_pengambilan' ,null,['class'=>'form-control']); ?>

</div>

<div class="form-group">
<?php echo Form::label('Petugas_penerima', 'Petugas:'); ?>

<?php echo Form::text('Petugas_penerima' ,null,['class'=>'form-control']); ?>

</div>
<div class="form-group">
<?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>