<div class="modal fade show d-block" tabindex="-1" style="background-color: rgba(0, 0, 0, 0.5); z-index: 1050;">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow p-4 bg-white">
            <div class="modal-header border-0 pb-0 d-flex justify-content-between align-items-center">
                <h5 class="modal-title fw-bold text-dark fs-4">Editar Produto</h5>
                <button type="button" wire:click="fecharEdicao" class="btn-close shadow-none" aria-label="Close"></button>
            </div>

            <!-- CORPO DO FORMULÁRIO -->
            <div class="modal-body pt-4">
                <form wire:submit.prevent="atualizarProduto">
                    
                    <div class="row">
                        <!-- NOME DO PRODUTO -->
                        <div class="col-12 col-md-6 mb-3">
                            <label class="form-label small fw-bold text-secondary">NOME DO PRODUTO</label>
                            <input type="text" class="form-control rounded-pill bg-light py-2" wire:model="edit_nome">
                            @error('edit_nome') <span class="text-danger small ps-2">{{ $message }}</span> @enderror
                        </div>

                        <!-- PRAZO DE VALIDADE -->
                        <div class="col-12 col-md-6 mb-3">
                            <label class="form-label small fw-bold text-secondary">PRAZO DE VALIDADE</label>
                            <input type="date" class="form-control rounded-pill bg-light py-2" wire:model="edit_validade">
                            @error('edit_validade') <span class="text-danger small ps-2">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <!-- DESCRIÇÃO -->
                    <div class="mb-3">
                        <label class="form-label small fw-bold text-secondary">DESCRIÇÃO</label>
                        <textarea class="form-control rounded-4 bg-light py-2" rows="3" wire:model="edit_descricao"></textarea>
                        @error('edit_descricao') <span class="text-danger small ps-2">{{ $message }}</span> @enderror
                    </div>

                    <div class="row">
                        <!-- COR -->
                        <div class="col-12 col-md-6 mb-3">
                            <label class="form-label small fw-bold text-secondary">COR</label>
                            <select class="form-select rounded-pill bg-light py-2" wire:model="edit_cor">
                                <option value="cinza">Cinza</option>
                                <option value="branco">Branco</option>
                                <option value="preto">Preto</option>
                                <option value="vermelho">Vermelho</option>
                                <option value="azul">Azul</option>
                            </select>
                            @error('edit_cor') <span class="text-danger small ps-2">{{ $message }}</span> @enderror
                        </div>

                        <!-- TEXTURA -->
                        <div class="col-12 col-md-6 mb-3">
                            <label class="form-label small fw-bold text-secondary">TEXTURA</label>
                            <select class="form-select rounded-pill bg-light py-2" wire:model="edit_textura">
                                <option value="liso">Liso</option>
                                <option value="rugoso">Rugoso</option>
                                <option value="fosco">Fosco</option>
                                <option value="brilhante">Brilhante</option>
                                <option value="poroso">Poroso</option>
                            </select>
                            @error('edit_textura') <span class="text-danger small ps-2">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="row align-items-end">
                        <!-- PESO -->
                        <div class="col-12 col-md-4 mb-3">
                            <label class="form-label small fw-bold text-secondary">PESO</label>
                            <input type="number" step="0.01" class="form-control rounded-pill bg-light py-2" wire:model="edit_peso">
                            @error('edit_peso') <span class="text-danger small ps-2">{{ $message }}</span> @enderror
                        </div>

                        <!-- UNIDADE DE MEDIDA -->
                        <div class="col-12 col-md-4 mb-3">
                            <label class="form-label small fw-bold text-secondary">UNIDADE DE MEDIDA</label>
                            <select class="form-select rounded-pill bg-light py-2" wire:model="edit_unidade_medida">
                                <option value="kg">KG</option>
                                <option value="g">G</option>
                                <option value="l">L</option>
                                <option value="ml">ML</option>
                                <option value="un">UN</option>
                            </select>
                            @error('edit_unidade_medida') <span class="text-danger small ps-2">{{ $message }}</span> @enderror
                        </div>

                        <!-- QUANTIDADE MÍNIMA -->
                        <div class="col-12 col-md-4 mb-3">
                            <label class="form-label small fw-bold text-secondary">QUANTIDADE MÍNIMA</label>
                            <input type="number" class="form-control rounded-pill bg-light py-2" wire:model="edit_quantidade_minima">
                            @error('edit_quantidade_minima') <span class="text-danger small ps-2">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <!-- BOTÕES DE AÇÃO -->
                    <div class="text-end mt-4 border-top pt-3">
                        <button type="button" wire:click="fecharEdicao" class="btn btn-light rounded-pill px-4 me-2 fw-bold border shadow-none">
                            Cancelar
                        </button>
                        <button type="submit" class="btn btn-primary rounded-pill px-5 fw-bold shadow-sm">
                            Salvar Alterações
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
