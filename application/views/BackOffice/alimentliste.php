<h4 class="fw-bold py-3 mb-4">Liste des Aliment</h4>
<hr>

<div class="card">
<div class="table-responsive text-nowrap">
    <br>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="text-align: center;" ><Strong style = "color: blue;font-size: 140%;">Categorie</Strong></th>
                        <th style="text-align: center;" ><Strong style = "color: blue;font-size: 140%;">Aliment</Strong></th>
                        <th style="text-align: center;" ><Strong style = "color: blue;font-size: 140%;">Prix</Strong></th>
                        <th style="text-align: center;     width: 1%;" ><Strong style = "color: blue;font-size: 140%;">Actions</Strong></th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php foreach ($liste_aliment as $key) {?>
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> 
                                    <strong><?php  echo $key['nom'];  ?></strong>
                                </td>
                                <td><?php  echo $key['nomaliment'];  ?></td>
                                <td style="text-align: end;"><?php  echo $key['prixaliment'];  ?></td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?php echo site_url("Aliment/modifier");?>?idaliment=<?php echo $key['idaliment']; ?>"
                                        ><i class="bx bx-edit-alt me-1"></i>Modifier</a
                                    >
                                    <a class="dropdown-item" href="<?php echo site_url("Carte/validationcodeadmin");?>?code=<?php echo $key['idaliment']; ?>"
                                        ><i class="bx bx-edit-alt me-1"></i>Supprimer</a
                                    >
                                    
                                    </div>
                                </div>
                                </td>
                            </tr>
                        <?php  }  ?>
                                              
                    </tbody>
                  </table>
                  <br><br>
                </div>
</div>
