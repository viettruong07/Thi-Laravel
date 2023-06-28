<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

    <title>information</title>
    <style type="text/css">
        .wrapper {
            width: 650px;
            margin: 0 auto;
        }

        .page-header h2 {
            margin-top: 0;
        }

        table tr td:last-child a {
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">FPT Aptech Library</h2>
                        <a href="<?php echo e('/add'); ?>" class="btn btn-success pull-right">
                            ADD
                        </a>
                    </div>
                    <form action="<?php echo e('/searchTitle'); ?>" method="GET">
                        <input type="text" name="search" placeholder="Search...">
                        <button type="submit">Search</button>
                    </form>


                    <table class='table table-bordered table-striped'>
                        <thead>
                            <tr>
                                <th>BookID</th>
                                <th>AuthorID</th>
                                <th>Title</th>
                                <th>ISBN</th>
                                <th>Pub_Year</th>
                                <th>Available</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php if($library->count() > 0): ?>
                                <?php $__currentLoopData = $library; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($l->bookid); ?></td>
                                        <td><?php echo e($l->authorid); ?></td>
                                        <td><?php echo e($l->title); ?></td>
                                        <td><?php echo e($l->ISBN); ?></td>
                                        <td><?php echo e($l->pub_year); ?></td>
                                        <td><?php echo e($l->available); ?></td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5">Không có sản phẩm nào</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/baithi-laravel/resources/views//information.blade.php ENDPATH**/ ?>