<form method="POST" action={{ route('categories.store') }} >
                        @csrf
                        <!-- Update the form fields based on your requirements -->
                        <div class="mb-3">
                            <label for="modalNom" class="form-label">Nom:</label>
                            <input type="text" class="form-control" id="modalNom" name="Nom" value="{{ old('Nom') }}">
                        </div>
                        <!-- Add other form fields for updating -->
                        <div class="mb-3">
                            <label for="modalDescription" class="form-label">Description:</label>
                            <input type="text" class="form-control" id="modalDescription" name="Description" value="{{ old('Description') }}">
                        </div>
                        <div class="mb-3">
                            <label for="modalMarque" class="form-label">Marque:</label>
                            <input type="text" class="form-control" id="modalMarque" name="Marque" value="{{ old('Marque') }}">
                        </div>
                        <div class="mb-3">
                            <label for="modalModel" class="form-label">Model:</label>
                            <input type="text" class="form-control" id="modalModel" name="Model"  value="{{ old('Model') }}">
                        </div>
                        <div class="mb-3">
                            <label for="modalSpecification" class="form-label">Specification:</label>
                            <input type="text" class="form-control" id="modalSpecification" name="Specification" value="{{ old('Specification') }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">d'accord</button>
                        </div>
                    </form>
