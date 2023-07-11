<h4 class="fw-bold py-3 mb-4">Liste des carte non valider</h4>
<hr>
<div class="card">
<div class="table-responsive text-nowrap">
    <br>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="text-align: center;" ><Strong style = "color: blue;font-size: 140%;">Utilisateur</Strong></th>
                        <th style="text-align: center;" ><Strong style = "color: blue;font-size: 140%;">Code</Strong></th>
                        <th style="text-align: center;" ><Strong style = "color: blue;font-size: 140%;">valeur de code</Strong></th>
                        <th style="text-align: center;     width: 1%;" ><Strong style = "color: blue;font-size: 140%;">Actions</Strong></th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php foreach ($liste as $key) {?>
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> 
                                    <strong><?php  echo $key['nom']."  ".$key['prenom'];  ?></strong>
                                </td>
                                <td><?php  echo $key['code'];  ?></td>
                                <td style="text-align: end;"><?php  echo number_format( $key['valeur'], 0, ',', ' ') ;  ?></td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?php echo site_url("Carte/validationcodeadmin");?>?code=<?php echo $key['code']; ?>&&idutilisateur=<?php echo $key['idutilisateur']; ?>"
                                        ><i class="bx bx-edit-alt me-1"></i>Valider</a
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
