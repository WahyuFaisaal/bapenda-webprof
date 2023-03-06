

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="row mb-4">
        <div class="col-lg-9">
            <div class="section-title">
                <h3>Dokumen</h3>
            </div>
        </div>
        <div class="col-lg-3 widget" style="margin-left: 0px;">
            <form id="search-additional-form" method="GET" class="search-widget">
                <input type="text" name="q" value="" placeholder="Cari Publikasi..." class="form-control"/>
            </form>
        </div>
    </div>
    <table style="width:100%" id="lecturer" class="table mb-4">
        <thead>
            <tr>
                <tr>
                    <th>No</th>
                    <th>Judul Dokumen</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
                <!-- <th>#</th> -->
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>1</td>
                <td >“The Design of Internet of Things Solutions for National Fishery Logistics System”</td>
                <td >2019</td>
                <td >Andini Dani Achmad</td>
            </tr>
            
        </tbody>
    </table>
    <nav class="paging justify-center" aria-label="Page navigation example">
        <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
        </ul>
    </nav>
</div>>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bapenda\resources\views/front/doc.blade.php ENDPATH**/ ?>