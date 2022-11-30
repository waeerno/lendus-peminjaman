<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Data <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Unit <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php echo $__env->make('components.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-xxl-3 col-sm-6 project-card">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="d-flex flex-column h-100">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted mb-4">Updated 3hrs ago</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="d-flex gap-1 align-items-center">
                                <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn">
                                    <span class="avatar-title bg-transparent fs-15">
                                        <i class="ri-star-fill"></i>
                                    </span>
                                </button>
                                <div class="dropdown">
                                    <button class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i data-feather="more-horizontal" class="icon-sm"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="apps-projects-overview"><i
                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                            View</a>
                                        <a class="dropdown-item" href="apps-projects-create"><i
                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                            Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#removeProjectModal"><i
                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                            Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-warning rounded p-2">
                                    <img src="<?php echo e(URL::asset('assets/images/brands/slack.png')); ?>" alt=""
                                        class="img-fluid p-1">
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fs-15"><a href="apps-projects-overview" class="text-dark">Slack brand logo
                                    design</a></h5>
                            <p class="text-muted text-truncate-two-lines mb-3">Create a Brand logo
                                design for a velzon admin.</p>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <div>Tasks</div>
                            </div>
                            <div class="flex-shrink-0">
                                <div><i class="ri-list-check align-bottom me-1 text-muted"></i>
                                    18/42</div>
                            </div>
                        </div>
                        <div class="progress progress-sm animated-progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="34" aria-valuemin="0"
                                aria-valuemax="100" style="width: 34%;">
                            </div><!-- /.progress-bar -->
                        </div><!-- /.progress -->
                    </div>
                </div>

            </div>
            <!-- end card body -->
            <div class="card-footer bg-transparent border-top-dashed py-2">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <div class="avatar-group">
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Darline Williams">
                                <div class="avatar-xxs">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar-2.jpg')); ?>" alt=""
                                        class="rounded-circle img-fluid">
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Add Members">
                                <div class="avatar-xxs">
                                    <div
                                        class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                        +
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="text-muted">
                            <i class="ri-calendar-event-fill me-1 align-bottom"></i> 10 Jul, 2021
                        </div>
                    </div>

                </div>

            </div>
            <!-- end card footer -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xxl-3 col-sm-6 project-card">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="d-flex flex-column h-100">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted mb-4">Last update : 08 May</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="d-flex gap-1 align-items-center">
                                <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn active">
                                    <span class="avatar-title bg-transparent fs-15">
                                        <i class="ri-star-fill"></i>
                                    </span>
                                </button>
                                <div class="dropdown">
                                    <button class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i data-feather="more-horizontal" class="icon-sm"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="apps-projects-overview"><i
                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                            View</a>
                                        <a class="dropdown-item" href="apps-projects-create"><i
                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                            Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#removeProjectModal"><i
                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                            Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-danger rounded p-2">
                                    <img src="<?php echo e(URL::asset('assets/images/brands/dribbble.png')); ?>" alt=""
                                        class="img-fluid p-1">
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fs-15"><a href="apps-projects-overview" class="text-dark">Redesign - Landing
                                    page</a></h5>
                            <p class="text-muted text-truncate-two-lines mb-3">Resign a landing page
                                design. as per abc minimal design.</p>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <div>Tasks</div>
                            </div>
                            <div class="flex-shrink-0">
                                <div><i class="ri-list-check align-bottom me-1 text-muted"></i>
                                    22/56</div>
                            </div>
                        </div>
                        <div class="progress progress-sm animated-progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="54" aria-valuemin="0"
                                aria-valuemax="100" style="width: 54%;">
                            </div><!-- /.progress-bar -->
                        </div><!-- /.progress -->
                    </div>
                </div>

            </div>
            <!-- end card body -->
            <div class="card-footer bg-transparent border-top-dashed py-2">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <div class="avatar-group">
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Brent Gonzalez">
                                <div class="avatar-xxs">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar-3.jpg')); ?>" alt=""
                                        class="rounded-circle img-fluid">
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Sylvia Wright">
                                <div class="avatar-xxs">
                                    <div class="avatar-title rounded-circle bg-secondary">
                                        S
                                    </div>
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Ellen Smith">
                                <div class="avatar-xxs">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar-4.jpg')); ?>" alt=""
                                        class="rounded-circle img-fluid">
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Add Members">
                                <div class="avatar-xxs">
                                    <div
                                        class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                        +
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="text-muted">
                            <i class="ri-calendar-event-fill me-1 align-bottom"></i> 18 May, 2021
                        </div>
                    </div>

                </div>

            </div>
            <!-- end card footer -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xxl-3 col-sm-6 project-card">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="d-flex flex-column h-100">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted mb-4">Updated 2hrs ago</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="d-flex gap-1 align-items-center">
                                <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn active">
                                    <span class="avatar-title bg-transparent fs-15">
                                        <i class="ri-star-fill"></i>
                                    </span>
                                </button>
                                <div class="dropdown">
                                    <button class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i data-feather="more-horizontal" class="icon-sm"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="apps-projects-overview"><i
                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                            View</a>
                                        <a class="dropdown-item" href="apps-projects-create"><i
                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                            Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#removeProjectModal"><i
                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                            Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-success rounded p-2">
                                    <img src="<?php echo e(URL::asset('assets/images/brands/mail_chimp.png')); ?>" alt=""
                                        class="img-fluid p-1">
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fs-15"><a href="apps-projects-overview" class="text-dark">Chat
                                    Application</a></h5>
                            <p class="text-muted text-truncate-two-lines mb-3">Create a Chat
                                application for business messaging needs. Collaborate efficiently
                                with secure direct messages and group chats.</p>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <div>Tasks</div>
                            </div>
                            <div class="flex-shrink-0">
                                <div><i class="ri-list-check align-bottom me-1 text-muted"></i>
                                    14/20</div>
                            </div>
                        </div>
                        <div class="progress progress-sm animated-progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100" style="width: 65%;">
                            </div><!-- /.progress-bar -->
                        </div><!-- /.progress -->
                    </div>
                </div>

            </div>
            <!-- end card body -->
            <div class="card-footer bg-transparent border-top-dashed py-2">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <div class="avatar-group">
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Jeffrey Salazar">
                                <div class="avatar-xxs">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar-5.jpg')); ?>" alt=""
                                        class="rounded-circle img-fluid">
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Mark Williams">
                                <div class="avatar-xxs">
                                    <div class="avatar-title rounded-circle bg-warning">
                                        M
                                    </div>
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Add Members">
                                <div class="avatar-xxs">
                                    <div
                                        class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                        +
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="text-muted">
                            <i class="ri-calendar-event-fill me-1 align-bottom"></i> 21 Feb, 2021
                        </div>
                    </div>

                </div>

            </div>
            <!-- end card footer -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xxl-3 col-sm-6 project-card">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="d-flex flex-column h-100">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted mb-4">Last update : 21 Jun</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="d-flex gap-1 align-items-center">
                                <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn">
                                    <span class="avatar-title bg-transparent fs-15">
                                        <i class="ri-star-fill"></i>
                                    </span>
                                </button>
                                <div class="dropdown">
                                    <button class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i data-feather="more-horizontal" class="icon-sm"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="apps-projects-overview"><i
                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                            View</a>
                                        <a class="dropdown-item" href="apps-projects-create"><i
                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                            Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#removeProjectModal"><i
                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                            Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-info rounded p-2">
                                    <img src="<?php echo e(URL::asset('assets/images/brands/dropbox.png')); ?>" alt=""
                                        class="img-fluid p-1">
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fs-15"><a href="apps-projects-overview" class="text-dark">Project App</a>
                            </h5>
                            <p class="text-muted text-truncate-two-lines mb-3">Create a project
                                application for a project management and task management.</p>
                        </div>
                    </div>

                    <div class="mt-auto">
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <div>Tasks</div>
                            </div>
                            <div class="flex-shrink-0">
                                <div><i class="ri-list-check align-bottom me-1 text-muted"></i>
                                    20/34</div>
                            </div>
                        </div>
                        <div class="progress progress-sm animated-progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0"
                                aria-valuemax="100" style="width: 78%;">
                            </div><!-- /.progress-bar -->
                        </div><!-- /.progress -->
                    </div>
                </div>

            </div>
            <!-- end card body -->
            <div class="card-footer bg-transparent border-top-dashed py-2">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <div class="avatar-group">
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Kristin Turpin">
                                <div class="avatar-xxs">
                                    <div class="avatar-title rounded-circle bg-info">
                                        K
                                    </div>
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Mary Leavitt">
                                <div class="avatar-xxs">
                                    <div class="avatar-title rounded-circle bg-danger">
                                        M
                                    </div>
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Add Members">
                                <div class="avatar-xxs">
                                    <div
                                        class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                        +
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="text-muted">
                            <i class="ri-calendar-event-fill me-1 align-bottom"></i> 03 Aug, 2021
                        </div>
                    </div>

                </div>

            </div>
            <!-- end card footer -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xxl-3 col-sm-6 project-card">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="d-flex flex-column h-100">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted mb-4">Updated 3hrs ago</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="d-flex gap-1 align-items-center">
                                <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn">
                                    <span class="avatar-title bg-transparent fs-15">
                                        <i class="ri-star-fill"></i>
                                    </span>
                                </button>
                                <div class="dropdown">
                                    <button class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i data-feather="more-horizontal" class="icon-sm"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="apps-projects-overview"><i
                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                            View</a>
                                        <a class="dropdown-item" href="apps-projects-create"><i
                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                            Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#removeProjectModal"><i
                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                            Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-warning rounded p-2">
                                    <img src="<?php echo e(URL::asset('assets/images/brands/slack.png')); ?>" alt=""
                                        class="img-fluid p-1">
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fs-15"><a href="apps-projects-overview" class="text-dark">Slack brand logo
                                    design</a></h5>
                            <p class="text-muted text-truncate-two-lines mb-3">Create a Brand logo
                                design for a velzon admin.</p>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <div>Tasks</div>
                            </div>
                            <div class="flex-shrink-0">
                                <div><i class="ri-list-check align-bottom me-1 text-muted"></i>
                                    18/42</div>
                            </div>
                        </div>
                        <div class="progress progress-sm animated-progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="34" aria-valuemin="0"
                                aria-valuemax="100" style="width: 34%;">
                            </div><!-- /.progress-bar -->
                        </div><!-- /.progress -->
                    </div>
                </div>

            </div>
            <!-- end card body -->
            <div class="card-footer bg-transparent border-top-dashed py-2">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <div class="avatar-group">
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Darline Williams">
                                <div class="avatar-xxs">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar-2.jpg')); ?>" alt=""
                                        class="rounded-circle img-fluid">
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Add Members">
                                <div class="avatar-xxs">
                                    <div
                                        class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                        +
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="text-muted">
                            <i class="ri-calendar-event-fill me-1 align-bottom"></i> 10 Jul, 2021
                        </div>
                    </div>

                </div>

            </div>
            <!-- end card footer -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xxl-3 col-sm-6 project-card">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="d-flex flex-column h-100">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted mb-4">Last update : 08 May</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="d-flex gap-1 align-items-center">
                                <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn active">
                                    <span class="avatar-title bg-transparent fs-15">
                                        <i class="ri-star-fill"></i>
                                    </span>
                                </button>
                                <div class="dropdown">
                                    <button class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i data-feather="more-horizontal" class="icon-sm"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="apps-projects-overview"><i
                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                            View</a>
                                        <a class="dropdown-item" href="apps-projects-create"><i
                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                            Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#removeProjectModal"><i
                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                            Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-danger rounded p-2">
                                    <img src="<?php echo e(URL::asset('assets/images/brands/dribbble.png')); ?>" alt=""
                                        class="img-fluid p-1">
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fs-15"><a href="apps-projects-overview" class="text-dark">Redesign - Landing
                                    page</a></h5>
                            <p class="text-muted text-truncate-two-lines mb-3">Resign a landing page
                                design. as per abc minimal design.</p>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <div>Tasks</div>
                            </div>
                            <div class="flex-shrink-0">
                                <div><i class="ri-list-check align-bottom me-1 text-muted"></i>
                                    22/56</div>
                            </div>
                        </div>
                        <div class="progress progress-sm animated-progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="54" aria-valuemin="0"
                                aria-valuemax="100" style="width: 54%;">
                            </div><!-- /.progress-bar -->
                        </div><!-- /.progress -->
                    </div>
                </div>

            </div>
            <!-- end card body -->
            <div class="card-footer bg-transparent border-top-dashed py-2">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <div class="avatar-group">
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Brent Gonzalez">
                                <div class="avatar-xxs">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar-3.jpg')); ?>" alt=""
                                        class="rounded-circle img-fluid">
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Sylvia Wright">
                                <div class="avatar-xxs">
                                    <div class="avatar-title rounded-circle bg-secondary">
                                        S
                                    </div>
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Ellen Smith">
                                <div class="avatar-xxs">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar-4.jpg')); ?>" alt=""
                                        class="rounded-circle img-fluid">
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Add Members">
                                <div class="avatar-xxs">
                                    <div
                                        class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                        +
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="text-muted">
                            <i class="ri-calendar-event-fill me-1 align-bottom"></i> 18 May, 2021
                        </div>
                    </div>

                </div>

            </div>
            <!-- end card footer -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xxl-3 col-sm-6 project-card">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="d-flex flex-column h-100">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted mb-4">Updated 2hrs ago</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="d-flex gap-1 align-items-center">
                                <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn active">
                                    <span class="avatar-title bg-transparent fs-15">
                                        <i class="ri-star-fill"></i>
                                    </span>
                                </button>
                                <div class="dropdown">
                                    <button class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i data-feather="more-horizontal" class="icon-sm"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="apps-projects-overview"><i
                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                            View</a>
                                        <a class="dropdown-item" href="apps-projects-create"><i
                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                            Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#removeProjectModal"><i
                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                            Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-success rounded p-2">
                                    <img src="<?php echo e(URL::asset('assets/images/brands/mail_chimp.png')); ?>" alt=""
                                        class="img-fluid p-1">
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fs-15"><a href="apps-projects-overview" class="text-dark">Chat
                                    Application</a></h5>
                            <p class="text-muted text-truncate-two-lines mb-3">Create a Chat
                                application for business messaging needs. Collaborate efficiently
                                with secure direct messages and group chats.</p>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <div>Tasks</div>
                            </div>
                            <div class="flex-shrink-0">
                                <div><i class="ri-list-check align-bottom me-1 text-muted"></i>
                                    14/20</div>
                            </div>
                        </div>
                        <div class="progress progress-sm animated-progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100" style="width: 65%;">
                            </div><!-- /.progress-bar -->
                        </div><!-- /.progress -->
                    </div>
                </div>

            </div>
            <!-- end card body -->
            <div class="card-footer bg-transparent border-top-dashed py-2">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <div class="avatar-group">
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Jeffrey Salazar">
                                <div class="avatar-xxs">
                                    <img src="<?php echo e(URL::asset('assets/images/users/avatar-5.jpg')); ?>" alt=""
                                        class="rounded-circle img-fluid">
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Mark Williams">
                                <div class="avatar-xxs">
                                    <div class="avatar-title rounded-circle bg-warning">
                                        M
                                    </div>
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Add Members">
                                <div class="avatar-xxs">
                                    <div
                                        class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                        +
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="text-muted">
                            <i class="ri-calendar-event-fill me-1 align-bottom"></i> 21 Feb, 2021
                        </div>
                    </div>

                </div>

            </div>
            <!-- end card footer -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xxl-3 col-sm-6 project-card">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="d-flex flex-column h-100">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted mb-4">Last update : 21 Jun</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="d-flex gap-1 align-items-center">
                                <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn">
                                    <span class="avatar-title bg-transparent fs-15">
                                        <i class="ri-star-fill"></i>
                                    </span>
                                </button>
                                <div class="dropdown">
                                    <button class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i data-feather="more-horizontal" class="icon-sm"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="apps-projects-overview"><i
                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                            View</a>
                                        <a class="dropdown-item" href="apps-projects-create"><i
                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                            Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#removeProjectModal"><i
                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                            Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-info rounded p-2">
                                    <img src="<?php echo e(URL::asset('assets/images/brands/dropbox.png')); ?>" alt=""
                                        class="img-fluid p-1">
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fs-15"><a href="apps-projects-overview" class="text-dark">Project App</a>
                            </h5>
                            <p class="text-muted text-truncate-two-lines mb-3">Create a project
                                application for a project management and task management.</p>
                        </div>
                    </div>

                    <div class="mt-auto">
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <div>Tasks</div>
                            </div>
                            <div class="flex-shrink-0">
                                <div><i class="ri-list-check align-bottom me-1 text-muted"></i>
                                    20/34</div>
                            </div>
                        </div>
                        <div class="progress progress-sm animated-progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0"
                                aria-valuemax="100" style="width: 78%;">
                            </div><!-- /.progress-bar -->
                        </div><!-- /.progress -->
                    </div>
                </div>

            </div>
            <!-- end card body -->
            <div class="card-footer bg-transparent border-top-dashed py-2">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <div class="avatar-group">
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Kristin Turpin">
                                <div class="avatar-xxs">
                                    <div class="avatar-title rounded-circle bg-info">
                                        K
                                    </div>
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Mary Leavitt">
                                <div class="avatar-xxs">
                                    <div class="avatar-title rounded-circle bg-danger">
                                        M
                                    </div>
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Add Members">
                                <div class="avatar-xxs">
                                    <div
                                        class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                        +
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="text-muted">
                            <i class="ri-calendar-event-fill me-1 align-bottom"></i> 03 Aug, 2021
                        </div>
                    </div>

                </div>

            </div>
            <!-- end card footer -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

<div class="table-responsive">
    <div class="float-end pb-4">
        <a href="<?php echo e(route('master.unit.create')); ?>" type="button"
            class="btn btn-primary btn-label waves-effect waves-light">
            <i class="ri-add-fill label-icon align-middle fs-16 me-2"></i> Tambah
        </a>
    </div>
    <table class="table align-middle mb-0">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Pimpinan</th>
                <th scope="col" class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($loop->index +1); ?></th>
                <td><?php echo e($item->nama); ?></td>
                <td>
                    <h6 class="text-primary mb-0"><?php echo e($item->pimpinan); ?></h6>
                    <span class="text-muted">
                        <?php echo e($item->nip); ?>

                    </span>
                </td>
                <td class="text-end">
                    <a href="<?php echo e(route('master.unit.edit', $item->id)); ?>" class="btn btn-sm btn-info"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data">
                        <i class="ri-edit-2-line"></i>
                    </a>

                    <a href="#" class="btn btn-sm btn-danger" onclick="confirmDelete(<?php echo e($item->id); ?>)"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data">
                        <form action="<?php echo e(route('master.unit.destroy', $item->id)); ?>" method="POST"
                            id="delete-<?php echo e($item->id); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                        </form>
                        <i class="ri-delete-bin-2-line"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="4" class="text-center"><span class="text-danger">Belum Ada Data</span></td>
            </tr>
            <?php endif; ?>

        </tbody>
    </table>
    <!-- end table -->
</div>
<!-- end table responsive -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="<?php echo e(URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>


<script>
    const confirmDelete = id => {
        Swal.fire({
            html: '<div class="mt-3">' +
                '<lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>' +
                '<div class="mt-4 pt-2 fs-15 mx-5">' +
                '<h4>Anda Yakin ?</h4>' +
                '<p class="text-muted mx-4 mb-0">Anda yakin ingin menghapus data ini ?</p>' +
                '</div>' +
                '</div>'
            , showCancelButton: true
            , reverseButtons: true
            , confirmButtonClass: 'btn btn-primary w-xs mb-1'
            , confirmButtonText: 'Ya, Hapus!'
            , cancelButtonClass: 'btn btn-danger w-xs mb-1 me-2'
            , cancelButtonText: 'Batal'
            , buttonsStyling: false
            , showCloseButton: true
        }).then((result) => {
            if (result.isConfirmed) {
                $(`#delete-${id}`).submit();
                Swal.fire(
                    'Dihapus!'
                    , 'Data berhasil dihapus.'
                    , 'success'
                )
            }
        })
    }

</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<?php if(Session::has('success')): ?>
<script>
    Toastify({
        text: "<?php echo e(session()->get('success')); ?>"
        , duration: 5000
        , close: true
        , gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        className: 'bg-primary'
        , style: {
            background: "linear-gradient(to right, rgb(10, 179, 156), rgb(64, 81, 137))"
        }
        , onClick: function() {} // Callback after click
    }).showToast();

</script>
<?php endif; ?>

<?php if(Session::has('error')): ?>
<script>
    Toastify({
        text: "<?php echo e(session()->get('error')); ?>"
        , duration: 5000
        , close: true
        , gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        className: 'bg-primary'
        , style: {
            background: "linear-gradient(to right, rgb(10, 179, 156), rgb(64, 81, 137))"
        }
        , onClick: function() {} // Callback after click
    }).showToast();

</script>
<?php endif; ?>

<script>
    $("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 4000 ); // 5 secs

});
</script>

<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\lendus-velzon\resources\views/pages/kategori/index.blade.php ENDPATH**/ ?>