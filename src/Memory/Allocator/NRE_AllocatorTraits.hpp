    
    /**
     * @file NRE_AllocatorTraits.hpp
     * @brief Declaration of Memory's API's Object : AllocatorTraits
     * @author Louis ABEL
     * @date 14/03/2020
     * @copyright CC-BY-NC-SA
     */
    
    #pragma once
    
    #include <type_traits>
    #include <utility>
    #include "Utility/Interfaces/NRE_StaticInterface.hpp"
    
    /**
     * @namespace NRE
     * @brief The NearlyRealEngine's global namespace
     */
    namespace NRE {
        /**
         * @namespace Memory
         * @brief Memory's API
         */
        namespace Memory {
    
            /**
             * @class AllocatorTraits
             * @brief Describe an allocator object
             */
            template <class Alloc>
            class AllocatorTraits {
            };
            /**
             * @class AllocatorTraits
             * @brief Describe an allocator object
             */
            template <template <class, class ...> class Alloc, class T, class ... AllocArgs>
            class AllocatorTraits<Alloc<T, AllocArgs...>> : public Utility::StaticInterface<AllocatorTraits<Alloc<T, AllocArgs...>>> {
                public:     // Traits
                    /**< The allocator type */
                    typedef Alloc<T, AllocArgs...>       AllocatorType;
                    /**< The allocated type */
                    typedef T                       ValueType;
                    /**< The pointer on allocated type */
                    typedef T*                      Pointer;
                    /**< The pointer on constant allocated type */
                    typedef const T*                ConstPointer;
                    /**< The allocator size type */
                    typedef std::size_t             SizeType;
                    
                    /**
                     * @class Rebinded
                     * Allow to rebind the given allocator to another type while keeping other arguments
                     */
                    template <class K>
                    struct Rebinded {
                        using Type = Alloc<K, AllocArgs...>;
                    };
    
                    /**< The rebinded allocator type */
                    template <class K>
                    using Rebind = typename Rebinded<K>::Type;
                    
                public: // Methods
                    //## Getter ##//
                        /**
                         * @return the maximum allocation size
                         */
                        SizeType getMaxSize() const noexcept {
                            return std::numeric_limits<std::size_t>::max() / sizeof(ValueType);
                        }
                        /**
                         * Retrieve the address of an object
                         * @param object the object to return his address
                         * @return       the object's address
                         */
                        Pointer getAddress(ValueType& object) const noexcept {
                            return std::addressof(object);
                        }
                        /**
                         * Retrieve the address of an object
                         * @param object the object to return his address
                         * @return       the object's address
                         */
                        ConstPointer getAddress(ValueType const& object) const noexcept {
                            return std::addressof(object);
                        }
    
                    //## Methods ##//
                        /**
                         * Allocate n * sizeof(T) bytes
                         * @param n the number of object
                         * @return  a pointer on the first allocated bytes
                         */
                        [[nodiscard]] Pointer allocate(SizeType n = 1) {
                            return this->impl().allocate(n);
                        }
                        /**
                         * Deallocate a pointer given by an allocate call
                         * @param p the pointer on the first bytes allocated
                         */
                        void deallocate(Pointer& p) {
                            this->impl().deallocate(p);
                        }
                        /**
                         * Deallocate a pointer given by an allocate call
                         * @param p the pointer on the first bytes allocated
                         * @param n the number of object allocated
                         */
                        void deallocate(Pointer& p, SizeType n) {
                            this->impl().deallocate(p, n);
                        }
                        /**
                         * Construct a K-type object in the given pointer with given arguments
                         * @param p    the pointer to construct the object
                         * @param args the construction arguments
                         */
                        template <class K, class ... Args>
                        K* construct(K* p, Args && ... args) {
                            return this->impl().construct(p, std::forward<Args>(args)...);
                        }
                        /**
                         * Destroy an given to the given pointer
                         * @param p the object address
                         */
                        template <class K>
                        void destroy(K* p) {
                            this->impl().destroy(p);
                        }
            };
        }
    }