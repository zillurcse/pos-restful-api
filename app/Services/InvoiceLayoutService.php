<?php
namespace App\Services;

use App\Models\InvoiceLayout;

class InvoiceLayoutService
{
    public function store(array $data): InvoiceLayout
    {
        $jsonFields = [
            'common_settings',
            'qr_code_fields',
            'table_tax_headings',
            'product_custom_fields',
            'contact_custom_fields',
            'location_custom_fields',
        ];

        // Convert arrays to JSON before saving
        foreach ($jsonFields as $field) {
            if (isset($data[$field]) && is_array($data[$field])) {
                $data[$field] = json_encode($data[$field]);
            }
        }
        // Create a new invoice setting with the validated data
        return InvoiceLayout::create($data);
    }

    public function update($id, array $data)
    {
        $jsonFields = [
            'common_settings',
            'qr_code_fields',
            'table_tax_headings',
            'product_custom_fields',
            'contact_custom_fields',
            'location_custom_fields',
        ];

        // Convert arrays to JSON if needed before updating
        foreach ($jsonFields as $field) {
            if (isset($data[$field]) && is_array($data[$field])) {
                $data[$field] = json_encode($data[$field]);
            }
        }

        // Find the InvoiceLayout by ID and update it
        $invoiceLayout = InvoiceLayout::findOrFail($id);
        $invoiceLayout->update($data);

        return $invoiceLayout;
    }

    public function findById($id)
    {
        return InvoiceLayout::findOrFail($id);
    }
}
