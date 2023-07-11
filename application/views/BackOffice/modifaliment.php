<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Detail /</span> Aliment</h4>

              <div class="row">
                <div class="col-md-12">
                  
                  <div class="card mb-4">
                    <h5 class="card-header">Aliment Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="../assets/img/avatars/1.png"
                          alt="<?php  echo $aliment['photo'];  ?>"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" action="<?php echo site_url("Aliment/validationmodifier"); ?>">
                        <div class="row">
                          <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Nom</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="nom"
                              value="<?php  echo $aliment['nomaliment'];  ?>"
                              autofocus
                            />
                            <input type="hidden" name="idaliment" value="<?php  echo $aliment['idaliment'];  ?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="lastName" class="form-label">Prix</label>
                            <input class="form-control" type="text" name="lastName" id="lastName" value="<?php  echo $aliment['prixaliment'];  ?>" />
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="email" class="form-label">Categorie</label>
                            <select id="country" class="select2 form-select">
                              <?php foreach ($categorie as $key) { ?>
                                  <option value="<?php echo $key['id']; ?>"><?php echo $key['nom']; ?></option>
                              <?php } ?>
        
                            </select>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  
                </div>
              </div>