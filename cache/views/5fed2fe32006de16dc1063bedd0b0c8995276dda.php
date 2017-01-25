<?php $__env->startSection('browsertitle'); ?>viewproduct <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

	<table id="tab">
				<thead>
					<tr>
						<th>Product Name</th>
						<th>Category Id</th>
						<th>Product Id</th>
						<th>Author</th>
						<th>Price</th>
						<th>&nbsp;&nbsp;&nbsp;Edit</th>
						<th>&nbsp;&nbsp;delete</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $prdt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prdt): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<tr>
						<td><?php echo $prdt->product_name; ?></td>
						<td><?php echo $prdt->category_id; ?></td>
						<td><?php echo $prdt->product_id; ?></td>
						<td><?php echo $prdt->author_name; ?></td>
						<td><?php echo $prdt->price; ?></td>
						<td><a href="/editproduct/<?php echo $prdt->product_id; ?>/">Edit</td>
						<td><a href="/deleteproduct/<?php echo $prdt->product_id; ?>/">Delete</a></td>
					</tr>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

          		</tbody>
			</table>
			<div>
			
			</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>