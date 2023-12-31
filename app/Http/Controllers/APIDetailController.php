<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class APIDetailController extends Controller
{

    /**
     * @OA\Get(
     *     path="/rest/details",
     *     summary="Obtiene todos los detalles",
     *     tags={"Details"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="id", type="integer",description="Detail ID"),
     *             @OA\Property(property="quantity", type="integer", description="Quantity"),
     *             @OA\Property(property="product_id", type="integer", description="Product ID"),
     *             @OA\Property(property="order_id", type="integer", description="Order ID")
     *         )
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Details not found.",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="error",
     *                 type="string",
     *                 description="Error message."
     *             )
     *         )
     *     )    
     * )
     */
    public function index()
    {
        $details = Detail::all();

        return response()->json([
            'details' => $details,
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'order_id' => 'required|exists:orders,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $detail = new Detail();
        $detail->product_id = $request->input('product_id');
        $detail->order_id = $request->input('order_id');
        $detail->quantity = $request->input('quantity');
        $detail->save();

        return response()->json(['message' => 'Detail created successfully.', 'detail' => $detail], 201);
    }

    /**
     * @OA\Post(
     *     path="/rest/details",
     *     summary="Crea y almacena un nuevo detalle",
     *     tags={"Details"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(property="product_id", description="product id",type="integer"),
     *                 @OA\Property(property="quantity", description="quantity",type="integer"),
     *                 @OA\Property(property="order_id",description="order id", type="integer")
     * 
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Detail created correctly",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="El detalle se creó con éxito."
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Validation error",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string")
     *         )
     *     )
     * )
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:product,id',
            'order_id' => 'required|exists:order,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $detail = new Detail();
        $detail->product_id = $request->input('product_id');
        $detail->order_id = $request->input('order_id');
        $detail->quantity = $request->input('quantity');
        $detail->save();

        return response()->json(['message' => 'Detalle creado exitosamente.', 'detail' => $detail], 201);
    }

    /**
     * @OA\Get(
     *     path="/rest/details/{id}",
     *     summary="Obtiene un detalle específico a partir de su ID",
     *     tags={"Details"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Detail ID",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="detail", type="object")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Detail not found",
     *         @OA\JsonContent(
     *             @OA\Property(property="error", type="string")
     *         )
     *     )
     * )
     */
    public function show($id)
    {
        $detail = Detail::findOrFail($id);

        return response()->json(['detail' => $detail]);
    }
}
