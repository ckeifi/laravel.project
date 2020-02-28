<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header"><?php echo e($title); ?></div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.posts.store")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="title">Title*</label>
                
                <input type="text" id="title" name="title" class="form-control" value="<?php echo e(old('title', isset($post) ? $post->title : '')); ?>">
                
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                
            </div>

            <div class="form-group">
              <div class="uploader">
                <input id="file-upload" type="file" name="cover" accept="image/*" onchange="readURL(this);">
                <label for="file-upload" id="file-drag">
                    <img id="file-image" src="#" alt="Preview" class="hidden">
                    <div id="start">
                        <i class="fas fa-download" aria-hidden="true"></i>
                        <div>Select a file</div>
                        <div id="notimage" class="hidden">Please select an image</div>
                        <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                        <br>
                        <span class="text-danger"><?php echo e($errors->first('cover')); ?></span>
                    </div>
                </label>
              </div>
            </div>
            <br><hr>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control select2" id="status" name="status">
                    <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control select2" id="category" name="categories[]" multiple>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="tag">Tags:</label>
                <select class="form-control select2"  multiple='multiple' id="tag" name="tags[]">
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control">
                    <?php echo e(old('content', isset($post) ? $post->content : '')); ?>

                </textarea>
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="Save">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('js/select2.min.js')); ?>"></script>

<script>

    $(document).ready(function () {
        $('.select2').select2();
    });

    function readURL(input, id) {
        id = id || '#file-image';
        
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $(id).attr('src', e.target.result);
            };
    
            reader.readAsDataURL(input.files[0]);
            $('#file-image').removeClass('hidden');
            $('#start').hide();
        }
    }
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara.vel\resources\views/admin/posts/create.blade.php ENDPATH**/ ?>