<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading">Update Lembur Pegawai</div>
                <div class="panel-body">
<?php echo Form::model($Tunjangan_pegawai, ['method' => 'PATCH','route'=>['Tunjangan_pegawai.update', $Tunjangan_pegawai->id]]); ?>

 <div class="panel-body">
<?php echo Form::open(['url' => 'Tunjangan_pegawai']); ?>

<div class="form-group">
<?php echo Form::label('Kode_tunjangan_pegawai', 'Kode:'); ?>

<?php echo Form::text('Kode_tunjangan_pegawai' ,null,['class'=>'form-control']); ?>

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
<?php echo Form::label('Kode_tunjangan', 'Kode Tunjangan:
'); ?>

<select name="Kode_tunjangan" class="form-control">
	<?php $__currentLoopData = $Tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_tunjangan); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>

<div class="form-group">
<?php echo Form::submit('Update', ['class' => 'btn btn-danger']); ?>

</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>