<?php
declare(strict_types=1);

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\ProductResource\Pages;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationGroup = 'Produtos';
    protected static ?string $activeNavigationIcon = 'heroicon-s-shopping-bag';
    protected static ?string $pluralModelLabel = "Produtos";
    protected static ?string $modelLabel = "Produto";
    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->label('Categoria')
                    ->options(
                        \App\Models\Category::where('type', 'product')->get()
                            ->mapWithKeys(fn ($category) => [$category->id => $category->name])
                    )
                    ->required(),

                Forms\Components\TextInput::make('name')
                    ->label('Nome do produto')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('brand')
                    ->label('Marca')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('price')
                    ->label('Preço')
                    ->required()
                    ->numeric()
                    ->prefix('$'),

                Forms\Components\TextInput::make('quantity')
                    ->label('Quantidade / Estoque')
                    ->required()
                    ->numeric()
                    ->default(0),

                Forms\Components\TextInput::make('sku')
                    ->label('SKU / Código de Barras')
                    ->required()
                    ->numeric()
                    ->default(0),

                Forms\Components\Textarea::make('description')
                    ->label('Descrição')
                    ->columnSpanFull(),

                Forms\Components\Toggle::make('visibility')
                    ->label('Visível')
                    ->required(),

                Forms\Components\FileUpload::make('image')
                    ->label('Imagem')
                    ->image()
                    ->directory('products'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Categoria')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('brand')
                    ->label('Marca')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Preço')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->label('Quantidade / Estoque')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('visibility')
                    ->label('Visível')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sku')
                    ->label('SKU / Código de Barras')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image')
                ->label('Imagem'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Atualizado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->label('Deletado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return (string) static::getModel()::count();
    }
}
