<?php $__env->startSection('content'); ?>

<?php echo $__env->make('pages.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">

    <div class="content">
         <div class="title m-b-cd">
            Post
        </div>     
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Create New Post" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Create</button>
        </div>
    </div>

        <div class="post_table">

        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <td colspan="4" style="text-align: center;">Post Category</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Cat 1</td>
                <td> <input type="button" value="Edit" /></td>
                <td> <input type="button" value="Delete" /></td>
            </tr>

            <tr>
                <th scope="row">2</th>
                <td>Cat 2</td>
                <td> <input type="button" value="Edit" /></td>
                <td> <input type="button" value="Delete" /></td>
            </tr>

            <tr>
                <th scope="row">3</th>
                <td>Cat 3</td>
                <td> <input type="button" value="Edit" /></td>
                <td> <input type="button" value="Delete" /></td>
            </tr>

            <tr>
                <th scope="row">4</th>
                <td>Cat 4</td>
                <td> <input type="button" value="Edit" /></td>
                <td> <input type="button" value="Delete" /></td>
            </tr>
            </tbody>
        </table>

    </div>

    <?php echo $__env->make('pages.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\AuthStatic\resources\views/post.blade.php ENDPATH**/ ?>