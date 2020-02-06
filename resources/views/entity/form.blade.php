
                        <div class="form-group">
                            <label for="name">name</label>
                          
                            <input name="name" type="text" class="form-control" 
                                id="name" aria-describedby="nameHelp" placeholder="Enter name"
                                value="{{ old('name', $entity->name ?? '')  }}">
                            <small id="nameHelp" class="form-text text-muted"></small>
                            

                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="socialDenomionation">Social Denomionation</label>
                            
                            <input name="social_denomination" type="text" class="form-control"
                                id="socialDenomination" aria-describedby="socialDenominationHelp" placeholder="Enter Social Denomination"
                                value="{{ old('social_denomination',$entity->social_denomination ?? '') }}">
                            <small id="socialDenominationHelp" class="form-text text-muted"></small>

                            @error('socialDenomination')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nif">Insert NIF</label>
                            <input name="nif" type="number" class="form-control" 
                                id="nif" aria-describedby="nifHelp" placeholder="Enter NIF"
                                value="{{ old('nif', $entity->nif ?? '') }}">
                            <small id="nifHelp" class="form-text text-muted"></small>

                            @error('nif')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="typeCompany">Insert Type Company</label>
                            
                            <select name="type_company" class="form-control" id="typeCompany" aria-describedby="typeCompanyHelp">
                                    
                                    @if(isset($entity) && $entity->type_company)
                                    <option value="{{ $entity->type_company }}" selected>{{ $entity->typeCompanyPreview }}</option>
                                    @else
                                    <option value disabled selected hidden>Select something...</option>
                                    @endif
                
                                    <option value="fornecedor">Fornecedor</option>
                                    <option value="transportador">Transportador</option>
                                    <option value="cliente">Cliente</option>

                            </select>
                            <small id="typeCompanyHelp" class="form-text text-muted"></small>  

                            @error('typeCompany')
                                <small class="text-danger">{{ $message }}</small> 
                            @enderror
                        </div>

                        <h3>Access Aplication</h3>
                        <div class="row">
                            
                            <div class=" col-md-4 col-xs-4">
                                <label for="accessAplication">Yes</label>
                                <input name="access_application" type="radio" class="form-control"
                                    id="accessAplication" aria-describedby="accessAplicationHelp" placeholder="Enter Access Aplication"
                                    value="true" @if(isset($entity) && $entity->access_application) checked @endif>
                            </div>
                            <div class=" col-md-4 col-xs-4">
                                <label for="accessAplication">No</label>
                                <input name="access_application" type="radio" class="form-control"
                                    id="accessAplication" aria-describedby="accessAplicationHelp" placeholder="Enter Access Aplication"
                                    value="false" @if(isset($entity) && !$entity->access_application) checked @endif>
                                <small id="accessAplicationHelp" class="form-text text-muted"></small>  

                                @error('accessAplication')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="logo">Insert Logo</label>

                            <input id="logo" name="logo" class="mt-4" type="file" aria-describedby="logoHelp"
                                value="{{ old('logo') }}">
                            <small id="logoHelp" class="form-text text-muted"></small>  

                            @error('logo')
                                <small class="text-danger">{{ $message }}</small> 
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="active">Active</label>
                            <input name="active"  type="radio" class="form-control"
                                 id="active" aria-describedby="activeHelp"
                                 value="true" @if(isset($entity) && $entity->active) checked @endif>
                            
                            <label for="active1">Inactive</label>
                            <input name="active" type="radio" class="form-control"
                                 id="active1" aria-describedby="active1Help"
                                 value="false" @if(isset($entity) && !$entity->active) checked @endif>
                            <small id="activeHelp" class="form-text text-muted"></small>  

                            @error('active')
                                <small class="text-danger">{{ $message }}</small> 
                            @enderror
                        </div>



                        <button type="submit" class="btn btn-primary">Save</button>
                       <!-- <button type="" class="btn btn-primary">Cancel</button> -->
              