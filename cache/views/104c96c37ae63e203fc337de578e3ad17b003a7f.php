<?php $__env->startSection('browsertitle'); ?>viewcategory <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

			<table id="tab">
				<thead>
					<tr>
						<th>Category Name</th>
						<th>Category ID</th>
						
						<th>&nbsp;&nbsp;&nbsp;Edit</th>
						<th>&nbsp;&nbsp;Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

						<tr>
						<td><?php echo $cat->category_name; ?></td>
						<td><?php echo $cat->category_id; ?></td>
						<td><a href="/editcategory/<?php echo $cat->category_id; ?>/">Edit</a></td>
						<td><a href="/deletecategory/<?php echo $cat->category_id; ?>/">Delete</a></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>



          		</tbody>
			</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>