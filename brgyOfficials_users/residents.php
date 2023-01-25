
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<main>

<div class="container-fluid p-3 mt-lg-5 clearfix">
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary btn-lg b-10" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
  Add Residents
</button>

	<!-- Modal -->
	<div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Residents</h5>
			<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		<form class="row g-3 needs-validation" novalidate>
			<div class="col-lg-4 mb-3">
				<div class="form-outline">
				<input type="text" class="form-control form-control-lg" id="validationCustom01"  name="lastname"  required />
				<label for="validationCustom01" class="form-label">First name</label>
				<div class="valid-feedback">Looks good!</div>
				</div>
			</div>
			<div class="col-lg-4 mb-3">
				<div class="form-outline">
				<input type="text" class="form-control form-control-lg" id="validationCustom02"  name="middlename" required />
				<label for="validationCustom02" class="form-label">Middle name</label>
				<div class="valid-feedback">Looks good!</div>
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<div class="form-outline">
				<input type="text" class="form-control form-control-lg" id="validationCustom02"  name="lastname" required />
				<label for="validationCustom02" class="form-label">Last name</label>
				<div class="valid-feedback">Looks good!</div>
				</div>
			</div>
			<div class="col-md-6 mb-3">
				<div class="form-outline">
				<input type="text" class="form-control form-control-lg" id="validationCustom03" required />
				<label for="validationCustom03" class="form-label">City</label>
				<div class="invalid-feedback">Please provide a valid city.</div>
				</div>
			</div>
			<div class="col-md-6 mb-3">
				<div class="form-outline">
				<input type="text" class="form-control form-control-lg" id="validationCustom03" required />
				<label for="validationCustom03" class="form-label">City</label>
				<div class="invalid-feedback">Please provide a valid city.</div>
				</div>
			</div>
			<div class="col-md-6 mb-3">
				<div class="form-outline">
				<input type="text" class="form-control form-control-lg" id="validationCustom03" required />
				<label for="validationCustom03" class="form-label">City</label>
				<div class="invalid-feedback">Please provide a valid city.</div>
				</div>
			</div>
			<div class="col-md-6 mb-3">
				<div class="form-outline">
				<input type="text" class="form-control form-control-lg" id="validationCustom05" required />
				<label for="validationCustom05" class="form-label">Zip</label>
				<div class="invalid-feedback">Please provide a valid zip.</div>
				</div>
			</div>
			<div class="col-12 mb-3">
				<div class="form-check">
				<input class="form-check-input" type="checkbox"  name="lastname" id="invalidCheck" required />
				<label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
				<div class="invalid-feedback">You must agree before submitting.</div>
				</div>
			</div>
			<div class="col-12 mb-3">
				<button class="btn btn-outline-primary btn-lg" type="submit">Submit form</button>
			</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary btn-lg" data-mdb-dismiss="modal">
			Close
			</button>
			<button type="button" class="btn btn-primary btn-lg">Save changes</button>
		</div>
		</div>
	</div>
	</div>


<!-- Tables List For residents -->
<section class=" p-3 mt-lg-5 clearfix">
<table class="table align-middle mb-0 bg-white t-10">
	<thead class="bg-light">
		<tr>
		<th>Name</th>
		<th>Title</th>
		<th>Status</th>
		<th>Position</th>
		<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<td>
			<div class="d-flex align-items-center">
			<img
				src="https://mdbootstrap.com/img/new/avatars/8.jpg"
				alt=""
				style="width: 45px; height: 45px"
				class="rounded-circle"
				/>
			<div class="ms-3">
				<p class="fw-bold mb-1">John Doe</p>
				<p class="text-muted mb-0">john.doe@gmail.com</p>
			</div>
			</div>
		</td>
		<td>
			<p class="fw-normal mb-1">Software engineer</p>
			<p class="text-muted mb-0">IT department</p>
		</td>
		<td>
			<span class="badge badge-success rounded-pill d-inline">Active</span>
		</td>
		<td>Senior</td>
		<td>
			<button type="button" class="btn btn-link btn-sm btn-rounded">
			Edit
			</button>
		</td>
		</tr>
		<tr>
		<td>
			<div class="d-flex align-items-center">
			<img
				src="https://mdbootstrap.com/img/new/avatars/6.jpg"
				class="rounded-circle"
				alt=""
				style="width: 45px; height: 45px"
				/>
			<div class="ms-3">
				<p class="fw-bold mb-1">Alex Ray</p>
				<p class="text-muted mb-0">alex.ray@gmail.com</p>
			</div>
			</div>
		</td>
		<td>
			<p class="fw-normal mb-1">Consultant</p>
			<p class="text-muted mb-0">Finance</p>
		</td>
		<td>
			<span class="badge badge-primary rounded-pill d-inline"
				>Onboarding</span
			>
		</td>
		<td>Junior</td>
		<td>
			<button
					type="button"
					class="btn btn-link btn-rounded btn-sm fw-bold"
					data-mdb-ripple-color="dark"
					>
			Edit
			</button>
		</td>
		</tr>
		<tr>
		<td>
			<div class="d-flex align-items-center">
			<img
				src="https://mdbootstrap.com/img/new/avatars/7.jpg"
				class="rounded-circle"
				alt=""
				style="width: 45px; height: 45px"
				/>
			<div class="ms-3">
				<p class="fw-bold mb-1">Kate Hunington</p>
				<p class="text-muted mb-0">kate.hunington@gmail.com</p>
			</div>
			</div>
		</td>
		<td>
			<p class="fw-normal mb-1">Designer</p>
			<p class="text-muted mb-0">UI/UX</p>
		</td>
		<td>
			<span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
		</td>
		<td>Senior</td>
		<td>
			<button
					type="button"
					class="btn btn-link btn-rounded btn-sm fw-bold"
					data-mdb-ripple-color="dark"
					>
			Edit
			</button>
		</td>
		</tr>
	</tbody>
	</table>
</section>
</div>
	
</main>


<?php include 'includes/footer.php';?>
 
<?php include 'includes/scripts.php';?>