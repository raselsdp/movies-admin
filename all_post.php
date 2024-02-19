<?php

include "header.php";


 ?>

<div class="h-screen flex-grow-1 overflow-y-lg-auto">
        
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <!-- Card stats -->
                
                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">All Post</h5>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">Server</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Edit / Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                This is title
                                            </td>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                Movies
                                            </td>
                                            <td class="text-end">
                                                <a href="edit.php" class="btn btn-sm btn-neutral"><i class="bi bi-pencil"></i></a>
                                                <button type="button" onclick="showSweetAlert()" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                    </div>
                   
                    <div class="card-footer border-0 py-5">
                        <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item"><a class="page-link disabled" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link bg-info text-white" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </main>
    </div>
            

    <?php include "footer.php"; ?>
