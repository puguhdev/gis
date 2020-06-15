<!-- Notifikasi -->
<?php if($this->session->flashdata('notif_true')): ?>
    <div class="alert alert-success alert-dismissible fade show notifikasi" role="alert">
        <i class="fas fa-check"></i> <?=$this->session->flashdata('notif_true')?>
    </div>
<?php elseif($this->session->flashdata('notif_false')): ?>
    <div class="alert alert-danger alert-dismissible fade show notifikasi" role="alert">
    <i class="fas fa-times"></i> <?=$this->session->flashdata('notif_false')?>
    </div>
<?php endif; ?>