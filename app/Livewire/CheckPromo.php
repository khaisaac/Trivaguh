<?php

namespace App\Livewire;

use App\Models\PromoCode;
use Livewire\Component;

class CheckPromo extends Component
/*************  ✨ Codeium Command ⭐  *************/
/**
 * Render the Livewire component view for checking promos.
 *
 * @return \Illuminate\View\View
 */

/******  4026e4c1-d5e5-4402-8589-8881f7d6ee77  *******/{

    public $promo_code;
    public $discount = 0;
    public $discount_type;
    public $isValid = false;


    public function checkPromo()
    {
        $promo = $this->findPromoCode($this->promo_code);
        if ($promo) {
            $this->applyPromoCode($promo);
        } else {
            $this->invalidatePromoCode();
        }
        $this->dispatchPromoCodeUpdate();
    }

    private function findPromoCode($promoCode)
    {
        return PromoCode::where('code', $promoCode)
        ->where('valid_until', '>=', now())
        ->where('is_used', false)
        ->first();
    }

    private function applyPromoCode($promo)
    {
        $this->isValid = true;
        $this->discount = $promo->discount ?? 0;
        $this->discount_type = $promo->discount_type;
    }

    private function invalidatePromoCode()
    {
        $this->isValid = false;
        $this->discount = 0;
        $this->discount_type = null;
    }

    private function dispatchPromoCodeUpdate()
    {
        $this->dispatch('promoCodeUpdated', [
            'promo_code' => $this->promo_code,
            'discount' => $this->discount,
            'discount_type' => $this->discount_type,
        ]);
        
    }

    public function render()
    {
        return view('livewire.check-promo');
    }
}